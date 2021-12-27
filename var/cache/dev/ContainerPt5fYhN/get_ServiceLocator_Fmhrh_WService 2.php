<?php

namespace ContainerPt5fYhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fmhrh_WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fmhrh.W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fmhrh.W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entity' => ['privates', '.errored..service_locator.Fmhrh.W.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.Fmhrh.W": it references class "App\\Entity\\User" but no such service exists.'],
            'handler' => ['privates', 'App\\Form\\Handler\\SaveCommonFormHandler', 'getSaveCommonFormHandlerService', true],
        ], [
            'entity' => 'App\\Entity\\User',
            'handler' => 'App\\Form\\Handler\\SaveCommonFormHandler',
        ]);
    }
}
