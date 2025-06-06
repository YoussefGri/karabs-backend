<?php

namespace ContainerF2LYzk6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['twig'] = $instance = new \Twig\Environment(($container->privates['twig.loader.native_filesystem'] ?? $container->load('getTwig_Loader_NativeFilesystemService')), ['autoescape' => 'name', 'cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => false, 'strict_variables' => false]);

        $a = ($container->services['translator'] ?? self::getTranslatorService($container));
        $b = ($container->services['router'] ?? self::getRouterService($container));
        $c = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());
        $d = ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));
        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('prod');
        $e->setDebug(false);
        $e->setTokenStorage($d);
        if ($container->has('request_stack')) {
            $e->setRequestStack($c);
        }
        $e->setLocaleSwitcher(($container->privates['translation.locale_switcher'] ?? $container->load('getTranslation_LocaleSwitcherService')));
        $e->setEnabledLocales([]);

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($container->privates['assets.packages'] ?? $container->load('getAssets_PackagesService'))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter(NULL)), \dirname(__DIR__, 4), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($container->privates['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($c, $b)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SerializerExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ImportMapExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)), new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator($c, ($container->privates['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container)), $d)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\UX\StimulusBundle\Twig\UxControllersTwigExtension());
        $instance->addExtension(new \Symfony\UX\Turbo\Twig\TwigExtension());
        $instance->addExtension(new \Twig\Extra\Html\HtmlExtension());
        $instance->addExtension(new \Symfony\UX\TwigComponent\Twig\ComponentExtension());
        $instance->addExtension(new \EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => [false, 'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator', 'getAdminUrlGeneratorService', false],
        ], [
            'EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator' => '?',
        ]), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), ($container->privates['security.csrf.token_manager'] ?? self::getSecurity_Csrf_TokenManagerService($container)), ($container->privates['asset_mapper.importmap.renderer'] ?? $container->load('getAssetMapper_Importmap_RendererService')), $a, NULL));
        $instance->addExtension(new \Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension(new \Symfony\UX\StimulusBundle\Helper\StimulusHelper($instance)));
        $instance->addGlobal('app', $e);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => ['privates', 'twig.runtime.serializer', 'getTwig_Runtime_SerializerService', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', true],
            'Symfony\\Bridge\\Twig\\Extension\\ImportMapRuntime' => ['privates', 'twig.runtime.importmap', 'getTwig_Runtime_ImportmapService', true],
            'Symfony\\UX\\StimulusBundle\\Twig\\UxControllersTwigRuntime' => ['privates', 'stimulus.ux_controllers_twig_runtime', 'getStimulus_UxControllersTwigRuntimeService', true],
            'Symfony\\UX\\Turbo\\Twig\\TurboRuntime' => ['privates', 'turbo.twig.runtime', 'getTurbo_Twig_RuntimeService', true],
            'Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime' => ['privates', 'ux.twig_component.twig.component_runtime', 'getUx_TwigComponent_Twig_ComponentRuntimeService', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\ImportMapRuntime' => '?',
            'Symfony\\UX\\StimulusBundle\\Twig\\UxControllersTwigRuntime' => '?',
            'Symfony\\UX\\Turbo\\Twig\\TurboRuntime' => '?',
            'Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime' => '?',
        ])));
        (new \Symfony\UX\TwigComponent\Twig\TwigEnvironmentConfigurator(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ',')))->configure($instance);

        return $instance;
    }
}
