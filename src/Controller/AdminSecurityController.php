<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class AdminSecurityController extends AbstractController
{

    private string $frontendUrl;

    public function __construct(ParameterBagInterface $params)
    {
        // $this->frontendUrl = rtrim($params->get('app.frontend_url'), '/');
            try {
             $this->frontendUrl = rtrim($params->get('app.frontend_url'), '/');
            } catch (\Exception $e) {
                die('Erreur ParameterBag: '.$e->getMessage());
            }
    }



    // #[Route('/admin/login', name: 'admin_login')]
    #[Route('/admin/login', name: 'admin_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        try {
            if ($this->getUser() && in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
                return $this->redirectToRoute('admin');
            }

            $error = $authenticationUtils->getLastAuthenticationError();
            $lastUsername = $authenticationUtils->getLastUsername();

            return $this->render('admin/login.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error
            ]);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            throw new \RuntimeException('Login failed: '.$e->getMessage());
        }
    }


    // #[Route('/admin/login', name: 'admin_login')]
    // public function login(AuthenticationUtils $authenticationUtils): Response
    // {
    //     // Si l'utilisateur est déjà connecté, redirigez-le vers le tableau de bord
    //     if ($this->getUser() && in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
    //         return $this->redirectToRoute('admin');
    //     }

    //     // Récupérer l'erreur de connexion s'il y en a une
    //     $error = $authenticationUtils->getLastAuthenticationError();
    //     // Dernier nom d'utilisateur saisi
    //     $lastUsername = $authenticationUtils->getLastUsername();

    //     return $this->render('admin/login.html.twig', [
    //         'last_username' => $lastUsername,
    //         'error' => $error
    //     ]);
    //     // return $this->render('admin/login.html.twig', [
    //     //     'last_username' => $lastUsername,
    //     //     'error' => $error,
    //     //     'logout_setup' => true,
    //     //     'username_label' => 'Email',
    //     //     'username_field' => 'email',
    //     //     'username_is_email' => true,
    //     //     'support_remember_me' => true,
    //     //     'always_remember_me' => false,
    //     // ]);

    // }

    // #[Route('/admin/logout', name: 'admin_logout')]
    // public function logout(): void
    // {
        
    //     // Cette méthode peut rester vide, elle sera interceptée par le firewall
    //     throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    // }

    #[Route('/admin/logout', name: 'admin_logout')]
    public function logout(TokenStorageInterface $tokenStorage, SessionInterface $session): Response
    {
        // Supprimer le token d'authentification
        $tokenStorage->setToken(null);
        
        // Invalider la session
        $session->invalidate();
        
        // Rediriger directement vers /login avec l'URL complète
        return $this->redirect('/login');
    }

    // Route /login - votre page de login principale
    #[Route('/login', name: 'app_login')]
    public function mainLogin(): Response
    {
        // return $this->redirect('http://localhost:8100/login'); // ton app Ionic
        return $this->redirect($this->frontendUrl . '/login');

    }

    
}