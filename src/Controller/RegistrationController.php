<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/api/register', name: 'api_register', methods: ['POST'])]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $passwordHasher, 
        EntityManagerInterface $entityManager
    ): Response {
        $data = json_decode($request->getContent(), true);

        // Vérifier si toutes les données requises sont présentes
        $requiredFields = ['nom', 'prenom', 'email', 'password', 'ville', 'codePostal'];
        foreach ($requiredFields as $field) {
            if (!isset($data[$field]) || empty($data[$field])) {
                return $this->json([
                    'success' => false,
                    'message' => 'Le champ ' . $field . ' est requis.'
                ], Response::HTTP_BAD_REQUEST);
            }
        }

        // Vérifier si l'email existe déjà
        $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $data['email']]);
        if ($existingUser) {
            return $this->json([
                'success' => false,
                'message' => 'Cette adresse email est déjà utilisée.'
            ], Response::HTTP_BAD_REQUEST);
        }

        // Créer un nouvel utilisateur
        $user = new User();
        $user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        $user->setEmail($data['email']);
        $user->setVille($data['ville']);
        $user->setCodePostal($data['codePostal']);
        $user->setRoles(['ROLE_USER']);
        $user->setName($data['prenom'] . ' ' . $data['nom']); // Pour la compatibilité avec OAuth

        // Hasher le mot de passe
        $hashedPassword = $passwordHasher->hashPassword($user, $data['password']);
        $user->setPassword($hashedPassword);

        // Persister l'utilisateur
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Inscription réussie !'
        ], Response::HTTP_CREATED);
    }
}