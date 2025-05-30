<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface; // Ajoutez cette ligne
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class OAuthAuthenticator extends OAuth2Authenticator implements AuthenticationEntryPointInterface
{
    private $clientRegistry;
    private $entityManager;
    private $router;
    private $JWTManager;
    private $frontendUrl;

    public function __construct(
        ClientRegistry $clientRegistry,
        EntityManagerInterface $entityManager,
        RouterInterface $router,
        JWTTokenManagerInterface $JWTManager,
        ParameterBagInterface $params
        ) {
        $this->clientRegistry = $clientRegistry;
        $this->entityManager = $entityManager;
        $this->router = $router;
        $this->JWTManager = $JWTManager;
        $this->frontendUrl = rtrim($params->get('app.frontend_url'), '/'); 
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check'
            || $request->attributes->get('_route') === 'connect_github_check'
            || $request->attributes->get('_route') === 'connect_facebook_check';
    }

    public function authenticate(Request $request): Passport
    {
        $provider = null;
        $route = $request->attributes->get('_route');

        if ($route === 'connect_google_check') {
            $provider = 'google';
        } elseif ($route === 'connect_github_check') {
            $provider = 'github';
        } elseif ($route === 'connect_facebook_check') {
            $provider = 'facebook';
        }

        $client = $this->clientRegistry->getClient($provider);
        $accessToken = $this->fetchAccessToken($client);

        return new SelfValidatingPassport(
            new UserBadge($accessToken->getToken(), function () use ($accessToken, $client, $provider) {
                $oauthUser = $client->fetchUserFromToken($accessToken);

                $existingUser = $this->entityManager->getRepository(User::class)->findOneBy([
                    'oauthId' => $oauthUser->getId(),
                    'oauthProvider' => $provider
                ]);

                if ($existingUser) {
                    return $existingUser;
                }

                $user = new User();
                $user->setEmail($oauthUser->getEmail());
                $user->setOauthId($oauthUser->getId());
                $user->setOauthProvider($provider);
                $user->setRoles(['ROLE_USER']);

                if ($provider === 'google') {
                    $user->setName($oauthUser->getName());
                    $user->setAvatar($oauthUser->getAvatar());
                } elseif ($provider === 'github') {
                    $user->setName($oauthUser->getNickname());
                    $user->setAvatar($oauthUser->getAvatar());
                } elseif ($provider === 'facebook') {
                    $user->setName($oauthUser->getName());
                    $user->setAvatar($oauthUser->getPictureUrl());
                }

                $this->entityManager->persist($user);
                $this->entityManager->flush();

                return $user;
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        //$redirectUrl = $request->getSession()->get('oauth_redirect_url', 'http://localhost:8100');
        $redirectUrl = $request->getSession()->get('oauth_redirect_url', $this->frontendUrl);
        $request->getSession()->remove('oauth_redirect_url');

        // Utilisez $this->JWTManager pour générer le token JWT
        $jwtToken = $this->JWTManager->create($token->getUser());

        return new RedirectResponse($redirectUrl . '/auth/callback?token=' . urlencode($jwtToken));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());
        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        return new JsonResponse(
            ['message' => 'Authentication required'],
            Response::HTTP_UNAUTHORIZED
        );
    }
}