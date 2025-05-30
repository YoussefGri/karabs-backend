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

    // #[Route('/connect/{provider}', name: 'connect_oauth')]
    // public function connectAction(string $provider, ClientRegistry $clientRegistry, Request $request): Response
    // {
    //     // $redirectUrl = $request->query->get('redirect_url', 'http://localhost:8100');
    //     $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
    //     $redirectUrl = $request->getSession()->get('oauth_redirect_url', $frontendUrl);

    //     $session = $request->getSession();
    //     $session->set('oauth_redirect_url', $redirectUrl);

    //     return $clientRegistry
    //         ->getClient($provider)
    //         ->redirect(['email', 'profile'], []);
    // }  
     

    #[Route('/connect/{provider}', name: 'connect_oauth')]
    public function connectAction(string $provider, ClientRegistry $clientRegistry, Request $request): Response
    {
        $frontendUrl = rtrim($this->params->get('app.frontend_url'), '/');
        $redirectUrl = $request->query->get('redirect_url', $frontendUrl);

        $session = $request->getSession();
        if (!$session->isStarted()) {
            $session->start();
        }
        $session->set('oauth_redirect_url', $redirectUrl);

        return $clientRegistry
            ->getClient($provider)
            ->redirect(['email', 'profile'], []);
    }

}