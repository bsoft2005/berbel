<?php

namespace ContainerPt5fYhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KXCMaD0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kXCMaD0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kXCMaD0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entity' => ['privates', '.errored..service_locator.kXCMaD0.App\\Entity\\Propiedades', NULL, 'Cannot autowire service ".service_locator.kXCMaD0": it references class "App\\Entity\\Propiedades" but no such service exists.'],
            'helper' => ['privates', 'App\\Zennovia\\Common\\EntityManagerHelper', 'getEntityManagerHelperService', true],
        ], [
            'entity' => 'App\\Entity\\Propiedades',
            'helper' => 'App\\Zennovia\\Common\\EntityManagerHelper',
        ]);
    }
}
