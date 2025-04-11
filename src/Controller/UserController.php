<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class UserController extends AbstractController
{
    private $em;
    private $userRepository;
    private $validator;
    private $security;
    private $slugger;

    public function __construct(
        EntityManagerInterface $em,
        UserRepository $userRepository,
        ValidatorInterface $validator,
        Security $security,
        SluggerInterface $slugger
    ) {
        $this->em = $em;
        $this->userRepository = $userRepository;
        $this->validator = $validator;
        $this->security = $security;
        $this->slugger = $slugger;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->disable(Action::DELETE); 
    }

    #[Route("/api/user/update", name:"api_user_update", methods:["PUT"])]
    public function updateProfile(Request $request): JsonResponse
    {
        $user = $this->security->getUser();
        
        if (!$user) {
            return $this->json(['message' => 'Utilisateur non authentifié'], Response::HTTP_UNAUTHORIZED);
        }
        
        $data = json_decode($request->getContent(), true);
        
        // Vérifier si l'email existe déjà et appartient à un autre utilisateur
        if (isset($data['email']) && $data['email'] !== $user->getEmail()) {
            $existingUser = $this->userRepository->findOneBy(['email' => $data['email']]);
            if ($existingUser && $existingUser->getId() !== $user->getId()) {
                return $this->json(['message' => 'Cet email est déjà utilisé'], Response::HTTP_BAD_REQUEST);
            }
        }
        
        // Mettre à jour les champs
        if (isset($data['prenom'])) {
            $user->setPrenom($data['prenom']);
        }
        
        if (isset($data['nom'])) {
            $user->setNom($data['nom']);
        }
        
        if (isset($data['email'])) {
            $user->setEmail($data['email']);
        }
        
        if (isset($data['ville'])) {
            $user->setVille($data['ville']);
        }
        
        if (isset($data['codePostal'])) {
            $user->setCodePostal($data['codePostal']);
        }
        
        // Mettre à jour le nom complet
        $user->setName($user->getPrenom() . ' ' . $user->getNom());
        
        // Valider l'entité
        $errors = $this->validator->validate($user);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[$error->getPropertyPath()] = $error->getMessage();
            }
            return $this->json(['message' => 'Données invalides', 'errors' => $errorMessages], Response::HTTP_BAD_REQUEST);
        }
        
        $this->em->flush();
        
        return $this->json([
            'message' => 'Profil mis à jour avec succès',
            'user' => [
                'id' => $user->getId(),
                'email' => $user->getEmail(),
                'nom' => $user->getNom(),
                'prenom' => $user->getPrenom(),
                'name' => $user->getName(),
                'roles' => $user->getRoles(),
                'ville' => $user->getVille(),
                'codePostal' => $user->getCodePostal(),
                'avatar' => $user->getAvatar()
            ]
        ]);
    }

    #[Route("/api/user/avatar", name:"api_user_avatar", methods:["POST"])]
    public function updateAvatar(Request $request): JsonResponse
    {
        $user = $this->security->getUser();
        
        if (!$user) {
            return $this->json(['message' => 'Utilisateur non authentifié'], Response::HTTP_UNAUTHORIZED);
        }
        
        $avatarFile = $request->files->get('avatar');
        
        if (!$avatarFile) {
            return $this->json(['message' => 'Aucun fichier trouvé'], Response::HTTP_BAD_REQUEST);
        }
        
        $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$avatarFile->guessExtension();
        
        try {
            $avatarFile->move(
                $this->getParameter('avatar_directory'),
                $newFilename
            );
            
            // Mettre à jour l'avatar de l'utilisateur
            $avatarUrl = $this->getParameter('avatar_base_url') . '/' . $newFilename;
            $user->setAvatar($avatarUrl);
            
            $this->em->flush();
            
            return $this->json([
                'message' => 'Avatar mis à jour avec succès',
                'avatarUrl' => $avatarUrl
            ]);
        } catch (\Exception $e) {
            return $this->json(['message' => 'Erreur lors de l\'upload de l\'avatar: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}