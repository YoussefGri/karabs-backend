<?php

namespace ContainerF2LYzk6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YR6jqeDService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yR6jqeD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yR6jqeD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityDto' => ['privates', '.errored..service_locator.yR6jqeD.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.yR6jqeD": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'fields' => ['privates', '.errored..service_locator.yR6jqeD.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection', NULL, 'Cannot autowire service ".service_locator.yR6jqeD": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection" but no such service exists.'],
            'filters' => ['privates', '.errored..service_locator.yR6jqeD.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection', NULL, 'Cannot autowire service ".service_locator.yR6jqeD": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection" but no such service exists.'],
            'searchDto' => ['privates', '.errored..service_locator.yR6jqeD.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto', NULL, 'Cannot autowire service ".service_locator.yR6jqeD": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto" but no such service exists.'],
        ], [
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'fields' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection',
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection',
            'searchDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto',
        ]);
    }
}
