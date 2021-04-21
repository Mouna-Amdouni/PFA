<?php

namespace ContainerDgpDyCi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O9ZMDfzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O9ZMDfz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O9ZMDfz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'opportuniteRepository' => ['privates', 'App\\Repository\\OpportuniteRepository', 'getOpportuniteRepositoryService', true],
        ], [
            'opportuniteRepository' => 'App\\Repository\\OpportuniteRepository',
        ]);
    }
}
