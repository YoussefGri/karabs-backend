<?php

namespace App\Controller;

use App\Entity\Enseigne;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


final class EnseigneController extends AbstractController
{

    #[Route('/api/enseignes/by-category/{name}', name: 'enseignes_by_category', methods: ['GET'])]
public function getEnseignesByCategory(string $name, EntityManagerInterface $em): JsonResponse
{
    $user = $this->getUser();


    if (!$user) {
        return $this->json(['message' => 'Non authentifié'], 401);
    }

    $repository = $em->getRepository(Enseigne::class);

    if (strtolower($name) === 'toutes') {
        $enseignes = $repository->findAll();
    } else {
        $enseignes = $repository->createQueryBuilder('e')
            ->join('e.categories', 'c')
            ->where('c.nom = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = $em->createQueryBuilder()
            ->select('AVG(n.note)')
            ->from('App\Entity\Notation', 'n')
            ->where('n.enseigne = :enseigne')
            ->setParameter('enseigne', $e)
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'description' => $e->getDescription(),
            'adresse' => $e->getAdresse(),
            'numeroTelephone' => $e->getNumeroTelephone(),
            'photo' => $e->getPhoto(),
            'noteMoyenne' => round((float) $noteMoyenne, 1)
        ];
    }, $enseignes);

    // return $this->json(['message' => 'Non autorisé'], 401);

    return $this->json([
        'enseignes' => $data,
        'favoris' => $user->getFavorisIds()
    ]);
}

#[Route('/api/map', name: 'map_enseignes', methods: ['GET'])]
public function getEnseignesForMap(EntityManagerInterface $em): JsonResponse
{
    $enseignes = $em->getRepository(Enseigne::class)->findAll();

    $data = array_map(function (Enseigne $e) use ($em) {
        $noteMoyenne = $em->createQueryBuilder()
            ->select('AVG(n.note)')
            ->from('App\Entity\Notation', 'n')
            ->where('n.enseigne = :enseigne')
            ->setParameter('enseigne', $e)
            ->getQuery()
            ->getSingleScalarResult();

        // Extraire latitude / longitude depuis gps_location
        [$lat, $lng] = explode(',', $e->getGpsLocation());

        return [
            'id' => $e->getId(),
            'nom' => $e->getNom(),
            'noteMoyenne' => round((float) $noteMoyenne, 1),
            'lat' => (float) $lat,
            'lng' => (float) $lng,
            'photo' => $e->getPhoto(),
            'numeroTelephone' => $e->getNumeroTelephone(),
            'adresse' => $e->getAdresse(),
            'categories'=> $e->getCategories()->map(function ($c) {
                return [
                    'id' => $c->getId(),
                    'nom' => $c->getNom()
                ];
            })->toArray(),
        ];
    }, $enseignes);

    return $this->json($data);
}


}
