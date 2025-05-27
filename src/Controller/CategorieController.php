<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/api/categories', name: 'api_categories', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): JsonResponse
    {
        $categories = $categorieRepository->findAll();

        return $this->json($categories, 200, [], ['groups' => 'categorie:read']);
    }

    #[Route('/api/categorie/{nom}', name: 'api_categorie_by_nom', methods: ['GET'])]
    public function getByNom(string $nom, CategorieRepository $repo): JsonResponse
    {
        $categorie = $repo->findOneBy(['nom' => $nom]);

        if (!$categorie) {
            return $this->json(['error' => 'Catégorie non trouvée'], 404);
        }

        return $this->json($categorie, 200, [], ['groups' => 'categorie:read']);
    }

}
