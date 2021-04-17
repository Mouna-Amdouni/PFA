<?php

namespace ContainerS221VZR;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ForumController' shared autowired service.
     *
     * @return \App\Controller\ForumController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ForumController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'UploadHelper.php';

        $container->services['App\\Controller\\ForumController'] = $instance = new \App\Controller\ForumController(($container->privates['App\\Repository\\TopicRepository'] ?? $container->load('getTopicRepositoryService')), ($container->privates['App\\Services\\UploadHelper'] ?? ($container->privates['App\\Services\\UploadHelper'] = new \App\Services\UploadHelper((\dirname(__DIR__, 4).'/public/images')))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.TqNo1sD'] ?? $container->load('get_ServiceLocator_TqNo1sDService'))->withContext('App\\Controller\\ForumController', $container));

        return $instance;
    }
}
