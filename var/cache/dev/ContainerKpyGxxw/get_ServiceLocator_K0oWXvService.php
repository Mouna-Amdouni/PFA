<?php

namespace ContainerKpyGxxw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K0oWXvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K0oW_xv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K0oW_xv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'topicRepository' => ['privates', 'App\\Repository\\TopicRepository', 'getTopicRepositoryService', true],
        ], [
            'topicRepository' => 'App\\Repository\\TopicRepository',
        ]);
    }
}
