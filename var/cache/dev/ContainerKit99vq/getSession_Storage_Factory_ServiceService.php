<?php

namespace ContainerKit99vq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Storage_Factory_ServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.storage.factory.service' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\ServiceSessionFactory
     *
     * @deprecated Since symfony/framework-bundle 5.3: The "session.storage.factory.service" service is deprecated, use "session.storage.factory.native", "session.storage.factory.php_bridge" or "session.storage.factory.mock_file" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.3', 'The "session.storage.factory.service" service is deprecated, use "session.storage.factory.native", "session.storage.factory.php_bridge" or "session.storage.factory.mock_file" instead.');

        return new \Symfony\Component\HttpFoundation\Session\Storage\ServiceSessionFactory(($container->privates['session.storage.native'] ?? $container->load('getSession_Storage_NativeService')));
    }
}
