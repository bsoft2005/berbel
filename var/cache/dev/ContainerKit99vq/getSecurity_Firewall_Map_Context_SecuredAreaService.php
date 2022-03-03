<?php

namespace ContainerKit99vq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_SecuredAreaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.secured_area' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/FormAuthenticationEntryPoint.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';

        $a = ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService());
        $b = ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService'));

        return $container->privates['security.firewall.map.context.secured_area'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.context_listener.0'] ?? $container->load('getSecurity_ContextListener_0Service'));
            yield 2 => ($container->privates['security.authentication.listener.form.secured_area'] ?? $container->load('getSecurity_Authentication_Listener_Form_SecuredAreaService'));
            yield 3 => ($container->privates['security.authentication.listener.rememberme.secured_area'] ?? $container->load('getSecurity_Authentication_Listener_Rememberme_SecuredAreaService'));
            yield 4 => ($container->privates['security.authentication.listener.anonymous.secured_area'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_SecuredAreaService'));
            yield 5 => ($container->privates['security.authentication.switchuser_listener.secured_area'] ?? $container->load('getSecurity_Authentication_SwitchuserListener_SecuredAreaService'));
            yield 6 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 7), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), $b, 'secured_area', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(($container->services['http_kernel'] ?? $container->getHttpKernelService()), $b, 'login', false), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false), new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, ($container->privates['security.event_dispatcher.secured_area'] ?? $container->load('getSecurity_EventDispatcher_SecuredAreaService')), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'logout']), new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('secured_area', 'App\\Security\\UserChecker', '.security.request_matcher.HS_okLf', true, false, 'security.user.provider.concrete.users', 'secured_area', 'security.authentication.form_entry_point.secured_area', NULL, NULL, [0 => 'switch_user', 1 => 'form_login', 2 => 'remember_me', 3 => 'anonymous'], ['parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH']));
    }
}
