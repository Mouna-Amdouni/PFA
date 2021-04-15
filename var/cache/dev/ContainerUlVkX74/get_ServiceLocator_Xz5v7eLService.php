<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xz5v7eLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xz5v7eL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xz5v7eL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'editProfile' => ['privates', 'App\\Form\\EditProfile', 'getEditProfileService', true],
            'user' => ['privates', '.errored..service_locator.xz5v7eL.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.xz5v7eL": it references class "App\\Entity\\User" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'editProfile' => 'App\\Form\\EditProfile',
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
