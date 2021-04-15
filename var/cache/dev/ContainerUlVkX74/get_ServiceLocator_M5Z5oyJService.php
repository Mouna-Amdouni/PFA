<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M5Z5oyJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.M5Z5oyJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.M5Z5oyJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'messageRepository' => ['privates', 'App\\Repository\\MessageRepository', 'getMessageRepositoryService', true],
            'topicRepository' => ['privates', 'App\\Repository\\TopicRepository', 'getTopicRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.M5Z5oyJ.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.M5Z5oyJ": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'messageRepository' => 'App\\Repository\\MessageRepository',
            'topicRepository' => 'App\\Repository\\TopicRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
