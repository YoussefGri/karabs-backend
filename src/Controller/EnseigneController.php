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

    
// #[Route('/api/enseignes/by-category/{name}', name: 'enseignes_by_category', methods: ['GET'])]
// public function getEnseignesByCategory(string $name, EntityManagerInterface $em): JsonResponse
// {
//     $enseignes = $em->getRepository(Enseigne::class);


//     if (strtolower($name) === 'toutes') {
//         $enseignes = $enseignes->findAll();
//     } else {
//         $enseignes = $enseignes->createQueryBuilder('e')
//         ->join('e.categories', 'c')
//         ->where('c.nom = :name')
//         ->setParameter('name', $name)
//         ->getQuery()
//         ->getResult();
//     }

//     $data = array_map(function (Enseigne $e) use ($em) {
//         $noteMoyenne = $em->createQueryBuilder()
//             ->select('AVG(n.note)')
//             ->from('App\Entity\Notation', 'n')
//             ->where('n.enseigne = :enseigne')
//             ->setParameter('enseigne', $e)
//             ->getQuery()
//             ->getSingleScalarResult();

//         return [
//             'id' => $e->getId(),
//             'nom' => $e->getNom(),
//             'description' => $e->getDescription(),
//             'adresse' => $e->getAdresse(),
//             'numeroTelephone' => $e->getNumeroTelephone(),
//             'photo' => $e->getPhoto(),
//             'noteMoyenne' => round((float) $noteMoyenne, 1),
//         ];
//     }, $enseignes);

//     return $this->json($data);
// }

    
    /*
    #[Route('/api/enseignes/by-category/{name}', name: 'enseignes_by_category', methods: ['GET'])]
    public function getEnseignesByCategory(string $name, EntityManagerInterface $em): JsonResponse
    {
        $enseignes = $em->getRepository(Enseigne::class)
            ->createQueryBuilder('e')
            ->join('e.categories', 'c')
            ->where('c.nom = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();

        $data = array_map(function (Enseigne $e) {
            return [
                'id' => $e->getId(),
                'nom' => $e->getNom(),
                'adresse' => $e->getAdresse(),
                'numeroTelephone' => $e->getNumeroTelephone(),
                'photo' => $e->getPhoto(),
            ];
        }, $enseignes);

        return $this->json($data);
    }
        */

}
