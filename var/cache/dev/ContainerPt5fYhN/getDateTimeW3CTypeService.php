<?php

namespace ContainerPt5fYhN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDateTimeW3CTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\Type\Custom\DateTimeW3CType' shared autowired service.
     *
     * @return \App\Form\Type\Custom\DateTimeW3CType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/DateTimeType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/Type/Custom/DateTimeW3CType.php';

        return $container->privates['App\\Form\\Type\\Custom\\DateTimeW3CType'] = new \App\Form\Type\Custom\DateTimeW3CType();
    }
}
