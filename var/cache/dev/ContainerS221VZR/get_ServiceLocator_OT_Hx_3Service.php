<?php

namespace ContainerS221VZR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OT_Hx_3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oT.hx.3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oT.hx.3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'topic' => ['privates', '.errored..service_locator.oT.hx.3.App\\Entity\\Topic', NULL, 'Cannot autowire service ".service_locator.oT.hx.3": it references class "App\\Entity\\Topic" but no such service exists.'],
        ], [
            'topic' => 'App\\Entity\\Topic',
        ]);
    }
}
