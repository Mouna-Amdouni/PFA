<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChangePwsdFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ChangePwsdFormType' shared autowired service.
     *
     * @return \App\Form\ChangePwsdFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ChangePwsdFormType'] = new \App\Form\ChangePwsdFormType();
    }
}