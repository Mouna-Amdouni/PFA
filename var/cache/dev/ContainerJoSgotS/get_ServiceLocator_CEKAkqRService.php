<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CEKAkqRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CEKAkqR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CEKAkqR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'opportunite' => ['privates', '.errored..service_locator.CEKAkqR.App\\Entity\\Opportunite', NULL, 'Cannot autowire service ".service_locator.CEKAkqR": it references class "App\\Entity\\Opportunite" but no such service exists.'],
        ], [
            'opportunite' => 'App\\Entity\\Opportunite',
        ]);
    }
}
