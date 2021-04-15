<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CategorieController' shared autowired service.
     *
     * @return \App\Controller\CategorieController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CategorieController'] = $instance = new \App\Controller\CategorieController(($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.vM_XwGp'] ?? $container->load('get_ServiceLocator_VMXwGpService'))->withContext('App\\Controller\\CategorieController', $container));

        return $instance;
    }
}
