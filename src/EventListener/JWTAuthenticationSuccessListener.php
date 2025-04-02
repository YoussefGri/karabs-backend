<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use App\Entity\User;

class JWTAuthenticationSuccessListener
{
    public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event)
    {
        $data = $event->getData();
        $user = $event->getUser();

        if (!$user instanceof User) {
            return;
        }

        // Ajouter les informations utilisateur à la réponse
        $data['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'nom' => $user->getNom() ?? '',
            'prenom' => $user->getPrenom() ?? '',
            'name' => $user->getName() ?? '',
            'roles' => $user->getRoles(),
            'ville' => $user->getVille() ?? '',
            'codePostal' => $user->getCodePostal() ?? '',
            'avatar' => $user->getAvatar() ?? ''
        ];

        $event->setData($data);
    }
}