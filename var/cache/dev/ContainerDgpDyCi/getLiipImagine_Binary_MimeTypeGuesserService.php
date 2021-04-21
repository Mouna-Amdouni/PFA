<?php

namespace ContainerDgpDyCi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Binary_MimeTypeGuesserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'liip_imagine.binary.mime_type_guesser' shared service.
     *
     * @return \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Binary'.\DIRECTORY_SEPARATOR.'MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'imagine-bundle'.\DIRECTORY_SEPARATOR.'Binary'.\DIRECTORY_SEPARATOR.'SimpleMimeTypeGuesser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'MimeTypeGuesserInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'MimeTypesInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mime'.\DIRECTORY_SEPARATOR.'MimeTypes.php';

        return $container->privates['liip_imagine.binary.mime_type_guesser'] = new \Liip\ImagineBundle\Binary\SimpleMimeTypeGuesser(\Symfony\Component\Mime\MimeTypes::getDefault());
    }
}
