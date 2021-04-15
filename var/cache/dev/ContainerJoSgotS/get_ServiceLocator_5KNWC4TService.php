<?php

namespace ContainerJoSgotS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5KNWC4TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5KNWC4T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5KNWC4T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AssociationController::UserAssociation' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController::activate' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::ajoutInformation' => ['privates', '.service_locator.O_5hto6', 'get_ServiceLocator_O5hto6Service', true],
            'App\\Controller\\AssociationController::creerAss' => ['privates', '.service_locator.ME9nYIG', 'get_ServiceLocator_ME9nYIGService', true],
            'App\\Controller\\AssociationController::delete' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::deleteA' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::deleteP' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::edit' => ['privates', '.service_locator.O_5hto6', 'get_ServiceLocator_O5hto6Service', true],
            'App\\Controller\\AssociationController::editCategorie' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::editCategorieP' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::editP' => ['privates', '.service_locator.O_5hto6', 'get_ServiceLocator_O5hto6Service', true],
            'App\\Controller\\AssociationController::edita' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::editaP' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController::index' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController::indexP' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController::indexUserAssociations' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController::new' => ['privates', '.service_locator.ME9nYIG', 'get_ServiceLocator_ME9nYIGService', true],
            'App\\Controller\\AssociationController::newP' => ['privates', '.service_locator.ME9nYIG', 'get_ServiceLocator_ME9nYIGService', true],
            'App\\Controller\\BlogController::activate' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController::delete' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController::editBlogPost' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController::historique' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController::oldPost' => ['privates', '.service_locator.hdra02_', 'get_ServiceLocator_Hdra02Service', true],
            'App\\Controller\\BlogController::preview' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController::undo' => ['privates', '.service_locator.ThC0.Xw', 'get_ServiceLocator_ThC0_XwService', true],
            'App\\Controller\\CategorieController::activate' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\CategorieController::delete' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\CategorieController::editCategorie' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\ForumController::activate' => ['privates', '.service_locator.oT.hx.3', 'get_ServiceLocator_OT_Hx_3Service', true],
            'App\\Controller\\ForumController::deletet' => ['privates', '.service_locator.oT.hx.3', 'get_ServiceLocator_OT_Hx_3Service', true],
            'App\\Controller\\ForumController::editMessage' => ['privates', '.service_locator.j_hnd_o', 'get_ServiceLocator_JHndOService', true],
            'App\\Controller\\ForumController::index' => ['privates', '.service_locator.TvSA7wV', 'get_ServiceLocator_TvSA7wVService', true],
            'App\\Controller\\ForumController::indexChatAdmin' => ['privates', '.service_locator.K0oW_xv', 'get_ServiceLocator_K0oWXvService', true],
            'App\\Controller\\ForumController::indexFALL' => ['privates', '.service_locator.K0oW_xv', 'get_ServiceLocator_K0oWXvService', true],
            'App\\Controller\\ForumController::indexM' => ['privates', '.service_locator.M5Z5oyJ', 'get_ServiceLocator_M5Z5oyJService', true],
            'App\\Controller\\ForumController::newTopic' => ['privates', '.service_locator.6tSQcDV', 'get_ServiceLocator_6tSQcDVService', true],
            'App\\Controller\\ForumController::supprofil' => ['privates', '.service_locator.IxBlXdo', 'get_ServiceLocator_IxBlXdoService', true],
            'App\\Controller\\ForumController::topic' => ['privates', '.service_locator.qp880Jn', 'get_ServiceLocator_Qp880JnService', true],
            'App\\Controller\\ForumController::topics' => ['privates', '.service_locator.qp880Jn', 'get_ServiceLocator_Qp880JnService', true],
            'App\\Controller\\OpportuniteController::delete' => ['privates', '.service_locator.CEKAkqR', 'get_ServiceLocator_CEKAkqRService', true],
            'App\\Controller\\OpportuniteController::edit' => ['privates', '.service_locator.CEKAkqR', 'get_ServiceLocator_CEKAkqRService', true],
            'App\\Controller\\OpportuniteController::index' => ['privates', '.service_locator.N5GYG1b', 'get_ServiceLocator_N5GYG1bService', true],
            'App\\Controller\\OpportuniteController::newPR' => ['privates', '.service_locator.F4KoWEP', 'get_ServiceLocator_F4KoWEPService', true],
            'App\\Controller\\OpportuniteController::show' => ['privates', '.service_locator.CEKAkqR', 'get_ServiceLocator_CEKAkqRService', true],
            'App\\Controller\\ParamsUserController::edit' => ['privates', '.service_locator.xz5v7eL', 'get_ServiceLocator_Xz5v7eLService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.A0rcl1e', 'get_ServiceLocator_A0rcl1eService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SecurityController::newUser' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Controller\\UserController::activate' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::changePswd' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::editUser' => ['privates', '.service_locator.0QLLOGm', 'get_ServiceLocator_0QLLOGmService', true],
            'App\\Controller\\UserController::groupAction' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Controller\\UserController::newUser' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AssociationController:UserAssociation' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController:activate' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:ajoutInformation' => ['privates', '.service_locator.O_5hto6', 'get_ServiceLocator_O5hto6Service', true],
            'App\\Controller\\AssociationController:creerAss' => ['privates', '.service_locator.ME9nYIG', 'get_ServiceLocator_ME9nYIGService', true],
            'App\\Controller\\AssociationController:delete' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:deleteA' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:deleteP' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:edit' => ['privates', '.service_locator.O_5hto6', 'get_ServiceLocator_O5hto6Service', true],
            'App\\Controller\\AssociationController:editCategorie' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:editCategorieP' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:editP' => ['privates', '.service_locator.O_5hto6', 'get_ServiceLocator_O5hto6Service', true],
            'App\\Controller\\AssociationController:edita' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:editaP' => ['privates', '.service_locator.2BosQU4', 'get_ServiceLocator_2BosQU4Service', true],
            'App\\Controller\\AssociationController:index' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController:indexP' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController:indexUserAssociations' => ['privates', '.service_locator.1UbjebN', 'get_ServiceLocator_1UbjebNService', true],
            'App\\Controller\\AssociationController:new' => ['privates', '.service_locator.ME9nYIG', 'get_ServiceLocator_ME9nYIGService', true],
            'App\\Controller\\AssociationController:newP' => ['privates', '.service_locator.ME9nYIG', 'get_ServiceLocator_ME9nYIGService', true],
            'App\\Controller\\BlogController:activate' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController:delete' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController:editBlogPost' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController:historique' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController:oldPost' => ['privates', '.service_locator.hdra02_', 'get_ServiceLocator_Hdra02Service', true],
            'App\\Controller\\BlogController:preview' => ['privates', '.service_locator.wGOyHbk', 'get_ServiceLocator_WGOyHbkService', true],
            'App\\Controller\\BlogController:undo' => ['privates', '.service_locator.ThC0.Xw', 'get_ServiceLocator_ThC0_XwService', true],
            'App\\Controller\\CategorieController:activate' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\CategorieController:delete' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\CategorieController:editCategorie' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\ForumController:activate' => ['privates', '.service_locator.oT.hx.3', 'get_ServiceLocator_OT_Hx_3Service', true],
            'App\\Controller\\ForumController:deletet' => ['privates', '.service_locator.oT.hx.3', 'get_ServiceLocator_OT_Hx_3Service', true],
            'App\\Controller\\ForumController:editMessage' => ['privates', '.service_locator.j_hnd_o', 'get_ServiceLocator_JHndOService', true],
            'App\\Controller\\ForumController:index' => ['privates', '.service_locator.TvSA7wV', 'get_ServiceLocator_TvSA7wVService', true],
            'App\\Controller\\ForumController:indexChatAdmin' => ['privates', '.service_locator.K0oW_xv', 'get_ServiceLocator_K0oWXvService', true],
            'App\\Controller\\ForumController:indexFALL' => ['privates', '.service_locator.K0oW_xv', 'get_ServiceLocator_K0oWXvService', true],
            'App\\Controller\\ForumController:indexM' => ['privates', '.service_locator.M5Z5oyJ', 'get_ServiceLocator_M5Z5oyJService', true],
            'App\\Controller\\ForumController:newTopic' => ['privates', '.service_locator.6tSQcDV', 'get_ServiceLocator_6tSQcDVService', true],
            'App\\Controller\\ForumController:supprofil' => ['privates', '.service_locator.IxBlXdo', 'get_ServiceLocator_IxBlXdoService', true],
            'App\\Controller\\ForumController:topic' => ['privates', '.service_locator.qp880Jn', 'get_ServiceLocator_Qp880JnService', true],
            'App\\Controller\\ForumController:topics' => ['privates', '.service_locator.qp880Jn', 'get_ServiceLocator_Qp880JnService', true],
            'App\\Controller\\OpportuniteController:delete' => ['privates', '.service_locator.CEKAkqR', 'get_ServiceLocator_CEKAkqRService', true],
            'App\\Controller\\OpportuniteController:edit' => ['privates', '.service_locator.CEKAkqR', 'get_ServiceLocator_CEKAkqRService', true],
            'App\\Controller\\OpportuniteController:index' => ['privates', '.service_locator.N5GYG1b', 'get_ServiceLocator_N5GYG1bService', true],
            'App\\Controller\\OpportuniteController:newPR' => ['privates', '.service_locator.F4KoWEP', 'get_ServiceLocator_F4KoWEPService', true],
            'App\\Controller\\OpportuniteController:show' => ['privates', '.service_locator.CEKAkqR', 'get_ServiceLocator_CEKAkqRService', true],
            'App\\Controller\\ParamsUserController:edit' => ['privates', '.service_locator.xz5v7eL', 'get_ServiceLocator_Xz5v7eLService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.A0rcl1e', 'get_ServiceLocator_A0rcl1eService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\SecurityController:newUser' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Controller\\UserController:activate' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:changePswd' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:editUser' => ['privates', '.service_locator.0QLLOGm', 'get_ServiceLocator_0QLLOGmService', true],
            'App\\Controller\\UserController:groupAction' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'App\\Controller\\UserController:newUser' => ['privates', '.service_locator.d9f_dIJ', 'get_ServiceLocator_D9fDIJService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AssociationController::UserAssociation' => '?',
            'App\\Controller\\AssociationController::activate' => '?',
            'App\\Controller\\AssociationController::ajoutInformation' => '?',
            'App\\Controller\\AssociationController::creerAss' => '?',
            'App\\Controller\\AssociationController::delete' => '?',
            'App\\Controller\\AssociationController::deleteA' => '?',
            'App\\Controller\\AssociationController::deleteP' => '?',
            'App\\Controller\\AssociationController::edit' => '?',
            'App\\Controller\\AssociationController::editCategorie' => '?',
            'App\\Controller\\AssociationController::editCategorieP' => '?',
            'App\\Controller\\AssociationController::editP' => '?',
            'App\\Controller\\AssociationController::edita' => '?',
            'App\\Controller\\AssociationController::editaP' => '?',
            'App\\Controller\\AssociationController::index' => '?',
            'App\\Controller\\AssociationController::indexP' => '?',
            'App\\Controller\\AssociationController::indexUserAssociations' => '?',
            'App\\Controller\\AssociationController::new' => '?',
            'App\\Controller\\AssociationController::newP' => '?',
            'App\\Controller\\BlogController::activate' => '?',
            'App\\Controller\\BlogController::delete' => '?',
            'App\\Controller\\BlogController::editBlogPost' => '?',
            'App\\Controller\\BlogController::historique' => '?',
            'App\\Controller\\BlogController::oldPost' => '?',
            'App\\Controller\\BlogController::preview' => '?',
            'App\\Controller\\BlogController::undo' => '?',
            'App\\Controller\\CategorieController::activate' => '?',
            'App\\Controller\\CategorieController::delete' => '?',
            'App\\Controller\\CategorieController::editCategorie' => '?',
            'App\\Controller\\ForumController::activate' => '?',
            'App\\Controller\\ForumController::deletet' => '?',
            'App\\Controller\\ForumController::editMessage' => '?',
            'App\\Controller\\ForumController::index' => '?',
            'App\\Controller\\ForumController::indexChatAdmin' => '?',
            'App\\Controller\\ForumController::indexFALL' => '?',
            'App\\Controller\\ForumController::indexM' => '?',
            'App\\Controller\\ForumController::newTopic' => '?',
            'App\\Controller\\ForumController::supprofil' => '?',
            'App\\Controller\\ForumController::topic' => '?',
            'App\\Controller\\ForumController::topics' => '?',
            'App\\Controller\\OpportuniteController::delete' => '?',
            'App\\Controller\\OpportuniteController::edit' => '?',
            'App\\Controller\\OpportuniteController::index' => '?',
            'App\\Controller\\OpportuniteController::newPR' => '?',
            'App\\Controller\\OpportuniteController::show' => '?',
            'App\\Controller\\ParamsUserController::edit' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::newUser' => '?',
            'App\\Controller\\UserController::activate' => '?',
            'App\\Controller\\UserController::changePswd' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::editUser' => '?',
            'App\\Controller\\UserController::groupAction' => '?',
            'App\\Controller\\UserController::newUser' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AssociationController:UserAssociation' => '?',
            'App\\Controller\\AssociationController:activate' => '?',
            'App\\Controller\\AssociationController:ajoutInformation' => '?',
            'App\\Controller\\AssociationController:creerAss' => '?',
            'App\\Controller\\AssociationController:delete' => '?',
            'App\\Controller\\AssociationController:deleteA' => '?',
            'App\\Controller\\AssociationController:deleteP' => '?',
            'App\\Controller\\AssociationController:edit' => '?',
            'App\\Controller\\AssociationController:editCategorie' => '?',
            'App\\Controller\\AssociationController:editCategorieP' => '?',
            'App\\Controller\\AssociationController:editP' => '?',
            'App\\Controller\\AssociationController:edita' => '?',
            'App\\Controller\\AssociationController:editaP' => '?',
            'App\\Controller\\AssociationController:index' => '?',
            'App\\Controller\\AssociationController:indexP' => '?',
            'App\\Controller\\AssociationController:indexUserAssociations' => '?',
            'App\\Controller\\AssociationController:new' => '?',
            'App\\Controller\\AssociationController:newP' => '?',
            'App\\Controller\\BlogController:activate' => '?',
            'App\\Controller\\BlogController:delete' => '?',
            'App\\Controller\\BlogController:editBlogPost' => '?',
            'App\\Controller\\BlogController:historique' => '?',
            'App\\Controller\\BlogController:oldPost' => '?',
            'App\\Controller\\BlogController:preview' => '?',
            'App\\Controller\\BlogController:undo' => '?',
            'App\\Controller\\CategorieController:activate' => '?',
            'App\\Controller\\CategorieController:delete' => '?',
            'App\\Controller\\CategorieController:editCategorie' => '?',
            'App\\Controller\\ForumController:activate' => '?',
            'App\\Controller\\ForumController:deletet' => '?',
            'App\\Controller\\ForumController:editMessage' => '?',
            'App\\Controller\\ForumController:index' => '?',
            'App\\Controller\\ForumController:indexChatAdmin' => '?',
            'App\\Controller\\ForumController:indexFALL' => '?',
            'App\\Controller\\ForumController:indexM' => '?',
            'App\\Controller\\ForumController:newTopic' => '?',
            'App\\Controller\\ForumController:supprofil' => '?',
            'App\\Controller\\ForumController:topic' => '?',
            'App\\Controller\\ForumController:topics' => '?',
            'App\\Controller\\OpportuniteController:delete' => '?',
            'App\\Controller\\OpportuniteController:edit' => '?',
            'App\\Controller\\OpportuniteController:index' => '?',
            'App\\Controller\\OpportuniteController:newPR' => '?',
            'App\\Controller\\OpportuniteController:show' => '?',
            'App\\Controller\\ParamsUserController:edit' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:newUser' => '?',
            'App\\Controller\\UserController:activate' => '?',
            'App\\Controller\\UserController:changePswd' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:editUser' => '?',
            'App\\Controller\\UserController:groupAction' => '?',
            'App\\Controller\\UserController:newUser' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
