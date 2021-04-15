<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssociationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AssociationController' shared autowired service.
     *
     * @return \App\Controller\AssociationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\AssociationController'] = $instance = new \App\Controller\AssociationController(($container->privates['App\\Repository\\AssociationRepository'] ?? $container->load('getAssociationRepositoryService')), ($container->privates['App\\Services\\UploadHelper'] ?? ($container->privates['App\\Services\\UploadHelper'] = new \App\Services\UploadHelper('G:\\PFEE-main/public/images'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.vM_XwGp'] ?? $container->load('get_ServiceLocator_VMXwGpService'))->withContext('App\\Controller\\AssociationController', $container));

        return $instance;
    }
}
