<?php

namespace ContainerKRMYERO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_Command_DebugService extends App_KernelProdContainer
{
    /*
     * Gets the private 'ux.twig_component.command.debug' shared service.
     *
     * @return \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['ux.twig_component.command.debug'] = $instance = new \Symfony\UX\TwigComponent\Command\TwigComponentDebugCommand((\dirname(__DIR__, 4).'/templates'), ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService')), ($container->privates['twig'] ?? $container->load('getTwigService')), ['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon' => 'ea:Icon', 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Flag' => 'ea:Flag', 'EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Alert' => 'ea:Alert'], 'components/');

        $instance->setName('debug:twig-component');
        $instance->setDescription('Display components and them usages for an application');

        return $instance;
    }
}
