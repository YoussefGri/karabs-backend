<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'avatar' => [parent::class, 'avatar', null, 16],
        "\0".parent::class."\0".'codePostal' => [parent::class, 'codePostal', null, 16],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null, 16],
        "\0".parent::class."\0".'enseignesFavorites' => [parent::class, 'enseignesFavorites', null, 16],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null, 16],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null, 16],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null, 16],
        "\0".parent::class."\0".'oauthId' => [parent::class, 'oauthId', null, 16],
        "\0".parent::class."\0".'oauthProvider' => [parent::class, 'oauthProvider', null, 16],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null, 16],
        "\0".parent::class."\0".'plainPassword' => [parent::class, 'plainPassword', null, 16],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null, 16],
        "\0".parent::class."\0".'resetRequestedAt' => [parent::class, 'resetRequestedAt', null, 16],
        "\0".parent::class."\0".'resetToken' => [parent::class, 'resetToken', null, 16],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null, 16],
        "\0".parent::class."\0".'ville' => [parent::class, 'ville', null, 16],
        'avatar' => [parent::class, 'avatar', null, 16],
        'codePostal' => [parent::class, 'codePostal', null, 16],
        'email' => [parent::class, 'email', null, 16],
        'enseignesFavorites' => [parent::class, 'enseignesFavorites', null, 16],
        'id' => [parent::class, 'id', null, 16],
        'name' => [parent::class, 'name', null, 16],
        'nom' => [parent::class, 'nom', null, 16],
        'oauthId' => [parent::class, 'oauthId', null, 16],
        'oauthProvider' => [parent::class, 'oauthProvider', null, 16],
        'password' => [parent::class, 'password', null, 16],
        'plainPassword' => [parent::class, 'plainPassword', null, 16],
        'prenom' => [parent::class, 'prenom', null, 16],
        'resetRequestedAt' => [parent::class, 'resetRequestedAt', null, 16],
        'resetToken' => [parent::class, 'resetToken', null, 16],
        'roles' => [parent::class, 'roles', null, 16],
        'ville' => [parent::class, 'ville', null, 16],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
