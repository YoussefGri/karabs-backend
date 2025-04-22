<?php

namespace App\Controller;

use App\Entity\Enseigne;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/api/favoris')]
class FavorisController extends AbstractController
{

    #[Route('', name: 'get_favoris', methods: ['GET'])]
    public function getFavoris(EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->json(['message' => 'Non authentifié'], 401);
        }

        $favoris = $user->getFavoris(); // Renvoie un tableau de Enseigne
        $data = [];

        foreach ($favoris as $enseigne) {
            $noteMoyenne = (
                $enseigne->getNotePrix() +
                $enseigne->getNoteQualite() +
                $enseigne->getNoteAmbiance()
            ) / 3;


            $data[] = [
                'id' => $enseigne->getId(),
                'nom' => $enseigne->getNom(),
                'adresse' => $enseigne->getAdresse(),
                'photo' => $enseigne->getPhoto(),
                'numeroTelephone' => $enseigne->getNumeroTelephone(),
                'description' => $enseigne->getDescription(),
                'noteMoyenne' => round($noteMoyenne, 1),
                'slogan' => $enseigne->getSlogan(),
            ];
        }

        return $this->json($data);
    }

    #[Route('/add', name: 'add_favori', methods: ['POST'])]
    public function addFavori(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->json(['message' => 'Non authentifié'], 401);
        }

        $data = json_decode($request->getContent(), true);
        $enseigneId = $data['enseigneId'] ?? null;

        if (!$enseigneId) {
            return $this->json(['message' => 'ID enseigne manquant'], 400);
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($enseigneId);

        if (!$enseigne) {
            return $this->json(['message' => 'Enseigne non trouvée'], 404);
        }

        if (!$user->getFavoris()->contains($enseigne)) {
            $user->addFavori($enseigne);
            $em->persist($user);
            $em->flush();
        }

        return $this->json(['message' => 'Ajouté aux favoris']);
    }

    #[Route('/remove/{id}', name: 'remove_favori', methods: ['DELETE'])]
    public function removeFavori(int $id, EntityManagerInterface $em): JsonResponse
    {
        $user = $this->getUser();

        if (!$user) {
            return $this->json(['message' => 'Non authentifié'], 401);
        }

        $enseigne = $em->getRepository(Enseigne::class)->find($id);

        if (!$enseigne) {
            return $this->json(['message' => 'Enseigne non trouvée'], 404);
        }

        if ($user->getFavoris()->contains($enseigne)) {
            $user->removeFavori($enseigne);
            $em->persist($user);
            $em->flush();
        }

        return $this->json(['message' => 'Retiré des favoris']);
    }
}
