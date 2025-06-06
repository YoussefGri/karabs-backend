<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class OAuthController extends AbstractController
{
    private string $frontendUrl;

    public function __construct(ParameterBagInterface $params)
    {
        try {
            $this->frontendUrl = rtrim($params->get('app.frontend_url'), '/');
        } catch (\Exception $e) {
            // En production, log au lieu de die()
            error_log('Erreur de configuration frontend_url: ' . $e->getMessage());
            $this->frontendUrl = 'https://karabs-front.vercel.app'; // fallback 
        }
    }

    #[Route('/connect/{provider}', name: 'connect_oauth')]
    public function connectAction(string $provider, ClientRegistry $clientRegistry, Request $request): Response
    {
        $redirectUrl = $request->query->get('redirect_url', $this->frontendUrl);

        $session = $request->getSession();
        if (!$session->isStarted()) {
            $session->start();
        }
        $session->set('oauth_redirect_url', $redirectUrl);

        return $clientRegistry
            ->getClient($provider)
            ->redirect(['email', 'profile'], []);
    }

        #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectGoogleCheckAction(
        Request $request,
        ClientRegistry $clientRegistry,
        EntityManagerInterface $em,
        JWTTokenManagerInterface $JWTManager
    ): Response {
        try {
            $client = $clientRegistry->getClient('google');

             dd($client->getRedirectUrl());

            $googleUser = $client->fetchUser();

            $existingUser = $em->getRepository(User::class)->findOneBy([
                'oauthId' => $googleUser->getId(),
                'oauthProvider' => 'google'
            ]);

            if (!$existingUser) {
                $user = new User();
                $user->setEmail($googleUser->getEmail());
                $user->setName($googleUser->getName());
                $user->setAvatar($googleUser->getAvatar());
                $user->setOauthId($googleUser->getId());
                $user->setOauthProvider('google');
                $user->setRoles(['ROLE_USER']);

                $em->persist($user);
                $em->flush();
            } else {
                $user = $existingUser;
            }

            $token = $JWTManager->create($user);

            $redirectUrl = $request->getSession()->get('oauth_redirect_url', $this->frontendUrl);
            $request->getSession()->remove('oauth_redirect_url');

            // return $this->redirect($redirectUrl . '/auth/callback?token=' . urlencode($token));
            return $this->redirect($redirectUrl . (str_contains($redirectUrl, '?') ? '&' : '?') . 'token=' . urlencode($token));


        } catch (\Exception $e) {
            error_log($e->getMessage());

            $redirectUrl = $request->getSession()->get('oauth_redirect_url', $this->frontendUrl);
            $request->getSession()->remove('oauth_redirect_url');

            return $this->redirect($redirectUrl . '/auth/callback?error=' . urlencode('Erreur d\'authentification: ' . $e->getMessage()));
        }
    }

}


// class OAuthController extends AbstractController
// {

//     private ParameterBagInterface $params;

//     public function __construct(ParameterBagInterface $params)
//     {
//         $this->params = $params;
//     }

//     // #[Route('/connect/{provider}', name: 'connect_oauth')]
//     // public function connectAction(string $provider, ClientRegistry $clientRegistry, Request $request): Response
//     // {
//     //     // $redirectUrl = $request->query->get('redirect_url', 'http://localhost:8100');
//     //     $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
//     //     $redirectUrl = $request->getSession()->get('oauth_redirect_url', $frontendUrl);

//     //     $session = $request->getSession();
//     //     $session->set('oauth_redirect_url', $redirectUrl);

//     //     return $clientRegistry
//     //         ->getClient($provider)
//     //         ->redirect(['email', 'profile'], []);
//     // }  
     

//     #[Route('/connect/{provider}', name: 'connect_oauth')]
//     public function connectAction(string $provider, ClientRegistry $clientRegistry, Request $request): Response
//     {
//         $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
//         $redirectUrl = $request->query->get('redirect_url', $frontendUrl);

//         $session = $request->getSession();
//         if (!$session->isStarted()) {
//             $session->start();
//         }
//         $session->set('oauth_redirect_url', $redirectUrl);

//         return $clientRegistry
//             ->getClient($provider)
//             ->redirect(['email', 'profile'], []);
//     }

// }