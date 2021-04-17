<?php

namespace ContainerKpyGxxw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F4KoWEPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.F4KoWEP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.F4KoWEP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'opportuniteRepository' => ['privates', 'App\\Repository\\OpportuniteRepository', 'getOpportuniteRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.F4KoWEP.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.F4KoWEP": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'manager' => '?',
            'opportuniteRepository' => 'App\\Repository\\OpportuniteRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
