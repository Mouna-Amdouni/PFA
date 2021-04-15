<?php

namespace ContainerUlVkX74;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagineControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Liip\ImagineBundle\Controller\ImagineController' shared service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['liip_imagine.data.manager'] ?? $container->load('getLiipImagine_Data_ManagerService'));

        return $container->services['Liip\\ImagineBundle\\Controller\\ImagineController'] = new \Liip\ImagineBundle\Controller\ImagineController(new \Liip\ImagineBundle\Service\FilterService($a, ($container->services['liip_imagine.filter.manager'] ?? $container->load('getLiipImagine_Filter_ManagerService')), ($container->services['liip_imagine.cache.manager'] ?? $container->getLiipImagine_Cache_ManagerService()), false, $container->parameters['liip_imagine.webp.options'], ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService())), $a, ($container->services['liip_imagine.cache.signer'] ?? ($container->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($container->getEnv('APP_SECRET')))), new \Liip\ImagineBundle\Config\Controller\ControllerConfig(301));
    }
}
