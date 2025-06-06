<?php

namespace ContainerF2LYzk6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Logout_Listener_Default_AdminService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.logout.listener.default.admin' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        if (isset($container->privates['security.logout.listener.default.admin'])) {
            return $container->privates['security.logout.listener.default.admin'];
        }

        return $container->privates['security.logout.listener.default.admin'] = new \Symfony\Component\Security\Http\EventListener\DefaultLogoutListener($a, '/login');
    }
}
