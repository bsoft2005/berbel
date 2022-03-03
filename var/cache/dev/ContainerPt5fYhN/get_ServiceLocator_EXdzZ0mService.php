<?php

namespace ContainerPt5fYhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EXdzZ0mService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EXdzZ0m' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EXdzZ0m'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'handler' => ['privates', 'App\\Form\\Handler\\ChangePasswordFormHandler', 'getChangePasswordFormHandlerService', true],
        ], [
            'handler' => 'App\\Form\\Handler\\ChangePasswordFormHandler',
        ]);
    }
}
