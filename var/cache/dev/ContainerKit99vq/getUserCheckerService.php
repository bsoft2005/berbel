<?php

namespace ContainerKit99vq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCheckerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\UserChecker' shared autowired service.
     *
     * @return \App\Security\UserChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Security/UserChecker.php';

        return $container->privates['App\\Security\\UserChecker'] = new \App\Security\UserChecker(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['translator'] ?? $container->getTranslatorService()), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
