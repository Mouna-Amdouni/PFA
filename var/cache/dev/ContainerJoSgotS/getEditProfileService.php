<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEditProfileService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EditProfile' shared autowired service.
     *
     * @return \App\Form\EditProfile
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EditProfile'] = new \App\Form\EditProfile();
    }
}
