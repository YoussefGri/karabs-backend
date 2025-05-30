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

    private ParameterBagInterface $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    #[Route('/connect/{provider}', name: 'connect_oauth')]
    public function connectAction(string $provider, ClientRegistry $clientRegistry, Request $request): Response
    {
        // $redirectUrl = $request->query->get('redirect_url', 'http://localhost:8100');
        $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
        $redirectUrl = $request->getSession()->get('oauth_redirect_url', $frontendUrl);

        $session = $request->getSession();
        $session->set('oauth_redirect_url', $redirectUrl);

        return $clientRegistry
            ->getClient($provider)
            ->redirect(['email', 'profile'], []);
    }

    // #[Route('/connect/google/check', name: 'connect_google_check')]
    // public function connectGoogleCheckAction(Request $request, ClientRegistry $clientRegistry, EntityManagerInterface $em, JWTTokenManagerInterface $JWTManager): Response
    // {
    //     try {
    //         $client = $clientRegistry->getClient('google');
    //         $googleUser = $client->fetchUser();
    
    //         $existingUser = $em->getRepository(User::class)->findOneBy([
    //             'oauthId' => $googleUser->getId(),
    //             'oauthProvider' => 'google'
    //         ]);
    
    //         if (!$existingUser) {
    //             $user = new User();
    //             $user->setEmail($googleUser->getEmail());
    //             $user->setName($googleUser->getName());
    //             $user->setAvatar($googleUser->getAvatar());
    //             $user->setOauthId($googleUser->getId());
    //             $user->setOauthProvider('google');
    //             $user->setRoles(['ROLE_USER']);
    
    //             $em->persist($user);
    //             $em->flush();
    //         } else {
    //             $user = $existingUser;
    //         }
    
    //         $token = $JWTManager->create($user);
    
    //         // $redirectUrl = $request->getSession()->get('oauth_redirect_url', 'http://localhost:8100');
    //         $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
    //         $redirectUrl = $request->getSession()->get('oauth_redirect_url', $frontendUrl);
    //         $request->getSession()->remove('oauth_redirect_url'); // Clear session
    
    //         return $this->redirect($redirectUrl . '/auth/callback?token=' . urlencode($token));
    
    //     } catch (\Exception $e) {
    //         error_log($e->getMessage());
    //         // $redirectUrl = $request->getSession()->get('oauth_redirect_url', 'http://localhost:8100');
    //         $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
    //         $redirectUrl = $request->getSession()->get('oauth_redirect_url', $frontendUrl);
    //         $request->getSession()->remove('oauth_redirect_url'); // Clear session
    
    //         return $this->redirect($redirectUrl . '/auth/callback?error=' . urlencode('Erreur d\'authentification: ' . $e->getMessage()));
    //     }
    // }
    
}