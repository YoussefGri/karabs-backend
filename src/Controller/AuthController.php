<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AuthController extends AbstractController
{
    private $em;
    private $userRepository;
    private $passwordHasher;
    private $validator;
    private $security;

    public function __construct(
        EntityManagerInterface $em,
        UserRepository $userRepository,
        UserPasswordHasherInterface $passwordHasher,
        ValidatorInterface $validator,
        Security $security
    ) {
        $this->em = $em;
        $this->userRepository = $userRepository;
        $this->passwordHasher = $passwordHasher;
        $this->validator = $validator;
        $this->security = $security;
    }

    #[Route("/api/user/me", name:"api_user_me", methods:["GET"])]
    public function me(): JsonResponse
    {
        $user = $this->security->getUser();
        
        if (!$user) {
            return $this->json(['message' => 'Utilisateur non authentifié'], Response::HTTP_UNAUTHORIZED);
        }
        
        return $this->json([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'name' => $user->getName(),
            'roles' => $user->getRoles(),
            'ville' => $user->getVille(),
            'codePostal' => $user->getCodePostal(),
            'avatar' => $user->getAvatar()
        ]);
    }

    // Suppression de la méthode register qui est en double
}