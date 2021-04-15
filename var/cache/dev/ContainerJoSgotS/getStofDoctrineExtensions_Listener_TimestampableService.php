<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStofDoctrineExtensions_Listener_TimestampableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'stof_doctrine_extensions.listener.timestampable' shared service.
     *
     * @return \Gedmo\Timestampable\TimestampableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['stof_doctrine_extensions.listener.timestampable'] = $instance = new \Gedmo\Timestampable\TimestampableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}
