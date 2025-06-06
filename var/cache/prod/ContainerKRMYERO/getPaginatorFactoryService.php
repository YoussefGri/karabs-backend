<?php

namespace ContainerKRMYERO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaginatorFactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? self::getEntityFactoryService($container));

        if (isset($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'])) {
            return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'];
        }

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\PaginatorFactory'] = new \EasyCorp\Bundle\EasyAdminBundle\Factory\PaginatorFactory(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), new \EasyCorp\Bundle\EasyAdminBundle\Orm\EntityPaginator((isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']($container) : self::getAdminUrlGeneratorService($container)), $a, ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
