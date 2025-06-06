<?php

namespace ContainerPSY16kT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6IFKNdVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6IFKNdV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6IFKNdV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'em' => '?',
            'mailer' => '?',
            'tokenGenerator' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
