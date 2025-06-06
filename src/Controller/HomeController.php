<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route("/", name:"home")]
    public function index(): Response
    {
        return $this->json([
            'message' => 'Bienvenue sur l\'API OAuth',
            'status' => 'online'
        ]);
    }
}