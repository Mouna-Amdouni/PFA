<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOldPostRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\OldPostRepository' shared autowired service.
     *
     * @return \App\Repository\OldPostRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OldPostRepository'] = new \App\Repository\OldPostRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}