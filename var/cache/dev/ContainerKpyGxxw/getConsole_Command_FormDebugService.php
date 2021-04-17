<?php

namespace ContainerKpyGxxw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_FormDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.form_debug' shared service.
     *
     * @return \Symfony\Component\Form\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugCommand.php';

        $container->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($container->privates['form.registry'] ?? $container->load('getForm_RegistryService')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'Liip\\ImagineBundle\\Form\\Type'], [0 => 'App\\Form\\AssociationAjoutInfoType', 1 => 'App\\Form\\AssociationEditFormType', 2 => 'App\\Form\\AssociationEditPAFormType', 3 => 'App\\Form\\AssociationType', 4 => 'App\\Form\\BlogPostEditFormType', 5 => 'App\\Form\\BlogPostFormType', 6 => 'App\\Form\\CategorieFormType', 7 => 'App\\Form\\ChangePasswordFormType', 8 => 'App\\Form\\ChangePwsdFormType', 9 => 'App\\Form\\EditProfile', 10 => 'App\\Form\\NewMessageType', 11 => 'App\\Form\\NewTopicType', 12 => 'App\\Form\\OldPostFormType', 13 => 'App\\Form\\OpportuniteType', 14 => 'App\\Form\\ResetPasswordRequestFormType', 15 => 'App\\Form\\UserFormType', 16 => 'App\\Form\\UserInscritFormType', 17 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 18 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 19 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 20 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType', 21 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 22 => 'Liip\\ImagineBundle\\Form\\Type\\ImageType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:form');

        return $instance;
    }
}
