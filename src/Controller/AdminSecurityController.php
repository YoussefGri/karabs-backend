<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminSecurityController extends AbstractController
{
    #[Route('/admin/login', name: 'admin_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, redirigez-le vers le tableau de bord
        if ($this->getUser() && in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('admin');
        }

        // Récupérer l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();
        // Dernier nom d'utilisateur saisi
        $lastUsername = $authenticationUtils->getLastUsername();

        // return $this->render('admin/login.html.twig', [
        //     'last_username' => $lastUsername,
        //     'error' => $error
        // ]);
        return $this->render('admin/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'logout_setup' => true,
            'username_label' => 'Email',
            'username_field' => 'email',
            'username_is_email' => true,
            'support_remember_me' => true,
            'always_remember_me' => false,
        ]);

    }

    #[Route('/admin/logout', name: 'admin_logout')]
    public function logout(): void
    {
        
        // Cette méthode peut rester vide, elle sera interceptée par le firewall
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}