<?php

namespace ContainerS221VZR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TvSA7wVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TvSA7wV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TvSA7wV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
            'topic' => ['privates', '.errored..service_locator.TvSA7wV.App\\Entity\\Topic', NULL, 'Cannot autowire service ".service_locator.TvSA7wV": it references class "App\\Entity\\Topic" but no such service exists.'],
            'topicRepository' => ['privates', 'App\\Repository\\TopicRepository', 'getTopicRepositoryService', true],
        ], [
            'messageRepository' => 'App\\Repository\\MessageRepository',
            'topic' => 'App\\Entity\\Topic',
            'topicRepository' => 'App\\Repository\\TopicRepository',
        ]);
    }
}
