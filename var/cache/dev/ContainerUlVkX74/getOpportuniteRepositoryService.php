<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpportuniteRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\OpportuniteRepository' shared autowired service.
     *
     * @return \App\Repository\OpportuniteRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OpportuniteRepository'] = new \App\Repository\OpportuniteRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}