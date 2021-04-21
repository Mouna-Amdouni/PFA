<?php

namespace ContainerDgpDyCi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Hdra02Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hdra02_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hdra02_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'oldPost' => ['privates', '.errored..service_locator.hdra02_.App\\Entity\\OldPost', NULL, 'Cannot autowire service ".service_locator.hdra02_": it references class "App\\Entity\\OldPost" but no such service exists.'],
        ], [
            'oldPost' => 'App\\Entity\\OldPost',
        ]);
    }
}
