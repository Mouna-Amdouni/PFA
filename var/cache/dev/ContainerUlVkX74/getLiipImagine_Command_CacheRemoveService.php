<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Command_CacheRemoveService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.command.cache_remove' shared service.
     *
     * @return \Liip\ImagineBundle\Command\RemoveCacheCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['liip_imagine.command.cache_remove'] = $instance = new \Liip\ImagineBundle\Command\RemoveCacheCommand(($container->services['liip_imagine.cache.manager'] ?? $container->getLiipImagine_Cache_ManagerService()), ($container->services['liip_imagine.filter.manager'] ?? $container->load('getLiipImagine_Filter_ManagerService')));

        $instance->setName('liip:imagine:cache:remove');

        return $instance;
    }
}
