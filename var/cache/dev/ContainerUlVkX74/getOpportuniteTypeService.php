<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpportuniteTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\OpportuniteType' shared autowired service.
     *
     * @return \App\Form\OpportuniteType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\OpportuniteType'] = new \App\Form\OpportuniteType();
    }
}
