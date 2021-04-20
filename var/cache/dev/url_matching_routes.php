<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:223)'
                    .'|([A-z0-9_-]*)/(.+)(*:249)'
                .')'
                .'|/(en|fr)/(?'
                    .'|a(?'
                        .'|dmin(?'
                            .'|(*:281)'
                            .'|/(?'
                                .'|blog(?'
                                    .'|(*:300)'
                                    .'|/(?'
                                        .'|new(*:315)'
                                        .'|edit/([^/]++)(*:336)'
                                        .'|changevalidite/([^/]++)(*:367)'
                                        .'|delete/([^/]++)(*:390)'
                                        .'|groupaction(*:409)'
                                        .'|historique(?'
                                            .'|/(?'
                                                .'|([^/]++)(*:442)'
                                                .'|undo/([^/]++)(*:463)'
                                                .'|oldpost/([^/]++)(*:487)'
                                            .')'
                                            .'|s(*:497)'
                                        .')'
                                        .'|preview/([^/]++)(*:522)'
                                    .')'
                                .')'
                                .'|categorie(?'
                                    .'|(*:544)'
                                    .'|/(?'
                                        .'|new(*:559)'
                                        .'|edit/([^/]++)(*:580)'
                                        .'|changevalidite/([^/]++)(*:611)'
                                        .'|delete/([^/]++)(*:634)'
                                        .'|groupaction(*:653)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ssociation(?'
                            .'|(*:678)'
                            .'|/(?'
                                .'|new(*:693)'
                                .'|([^/]++)(?'
                                    .'|/edit(*:717)'
                                    .'|(*:725)'
                                .')'
                                .'|ass(?'
                                    .'|1(*:741)'
                                    .'|ociation/(?'
                                        .'|groupaction(*:772)'
                                        .'|edit(?'
                                            .'|/([^/]++)(*:796)'
                                            .'|1/([^/]++)(*:814)'
                                        .')'
                                        .'|changevalidite/([^/]++)(*:846)'
                                        .'|delete/([^/]++)(*:869)'
                                    .')'
                                .')'
                                .'|PA(*:881)'
                                .'|newP(*:893)'
                                .'|([^/]++)/(?'
                                    .'|editP(*:918)'
                                    .'|ajout(*:931)'
                                    .'|P(*:940)'
                                .')'
                                .'|associationP/edit(?'
                                    .'|/([^/]++)(*:978)'
                                    .'|1/([^/]++)(*:996)'
                                .')'
                                .'|Associ(?'
                                    .'|ationsUser(*:1024)'
                                    .'|/([^/]++)(*:1042)'
                                .')'
                            .')'
                        .')'
                        .'|(*:1054)'
                    .')'
                    .'|Bienvenue(*:1073)'
                    .'|forum(?'
                        .'|(*:1090)'
                        .'|/(?'
                            .'|newTopic(*:1111)'
                            .'|topic/([^/]++)(*:1134)'
                            .'|editMessage/([^/]++)(*:1163)'
                            .'|groupaction(*:1183)'
                        .')'
                        .'|s(?'
                            .'|(*:1197)'
                            .'|/topics/([^/]++)(*:1222)'
                            .'|All(*:1234)'
                        .')'
                    .')'
                    .'|suppforum/([^/]++)(*:1263)'
                    .'|AdminChat(*:1281)'
                    .'|chats/changevaliditee/([^/]++)(*:1320)'
                    .'|deleteT/([^/]++)(*:1345)'
                    .'|opportunite(?'
                        .'|(*:1368)'
                        .'|/(?'
                            .'|new(*:1384)'
                            .'|([^/]++)/edit(*:1406)'
                            .'|newOP/([^/]++)(*:1429)'
                            .'|opportunites(?'
                                .'|(*:1453)'
                                .'|Admin(*:1467)'
                            .')'
                            .'|Opport/([^/]++)(*:1492)'
                            .'|d(?'
                                .'|ddelete/([^/]++)(*:1521)'
                                .'|eleteOPAdmin/([^/]++)(*:1551)'
                            .')'
                        .')'
                    .')'
                    .'|([^/]++)/edit(*:1576)'
                    .'|re(?'
                        .'|set\\-password(?'
                            .'|(*:1606)'
                            .'|/(?'
                                .'|check\\-email(*:1631)'
                                .'|reset(?:/([^/]++))?(*:1659)'
                            .')'
                        .')'
                        .'|gister(*:1676)'
                    .')'
                    .'|admin/(?'
                        .'|login(*:1700)'
                        .'|user(?'
                            .'|(*:1716)'
                            .'|/(?'
                                .'|new(*:1732)'
                                .'|edit/([^/]++)(*:1754)'
                                .'|change(?'
                                    .'|validite/([^/]++)(*:1789)'
                                    .'|Password(*:1806)'
                                .')'
                                .'|delete/([^/]++)(*:1831)'
                                .'|groupaction(*:1851)'
                            .')'
                        .')'
                    .')'
                    .'|logout(*:1869)'
                    .'|test(?'
                        .'|1(*:1886)'
                        .'|22(*:1897)'
                    .')'
                    .'|changepass(*:1917)'
                    .'|ConsultantUser(*:1940)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        223 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        300 => [[['_route' => 'app_admin_blogPosts', '_controller' => 'App\\Controller\\BlogController::blogPosts', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        315 => [[['_route' => 'app_admin_new_blogPosts', '_controller' => 'App\\Controller\\BlogController::newBlogPost', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        336 => [[['_route' => 'app_admin_edit_blogPosts', '_controller' => 'App\\Controller\\BlogController::editBlogPost', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        367 => [[['_route' => 'app_admin_changevalidite_blogPost', '_controller' => 'App\\Controller\\BlogController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        390 => [[['_route' => 'app_admin_delete_blogPost', '_controller' => 'App\\Controller\\BlogController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        409 => [[['_route' => 'app_admin_groupaction_blogPost', '_controller' => 'App\\Controller\\BlogController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        442 => [[['_route' => 'app_admin_historique_blogPost', '_controller' => 'App\\Controller\\BlogController::historique', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        463 => [[['_route' => 'app_admin_historique_undo', '_controller' => 'App\\Controller\\BlogController::undo', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        487 => [[['_route' => 'app_admin_oldpost_blogPosts', '_controller' => 'App\\Controller\\BlogController::oldPost', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        497 => [[['_route' => 'app_admin_allhistorique_blogPosts', '_controller' => 'App\\Controller\\BlogController::historiques', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        522 => [[['_route' => 'app_admin_preview_blogpost', '_controller' => 'App\\Controller\\BlogController::preview', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        544 => [[['_route' => 'app_admin_categories', '_controller' => 'App\\Controller\\CategorieController::users', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        559 => [[['_route' => 'app_admin_new_categorie', '_controller' => 'App\\Controller\\CategorieController::newCategorie', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        580 => [[['_route' => 'app_admin_edit_categorie', '_controller' => 'App\\Controller\\CategorieController::editCategorie', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        611 => [[['_route' => 'app_admin_changevalidite_categorie', '_controller' => 'App\\Controller\\CategorieController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        634 => [[['_route' => 'app_admin_delete_categorie', '_controller' => 'App\\Controller\\CategorieController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        653 => [[['_route' => 'app_admin_groupaction_categorie', '_controller' => 'App\\Controller\\CategorieController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        678 => [[['_route' => 'association_index', '_controller' => 'App\\Controller\\AssociationController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        693 => [[['_route' => 'association_new', '_controller' => 'App\\Controller\\AssociationController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        717 => [[['_route' => 'association_edit', '_controller' => 'App\\Controller\\AssociationController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        725 => [[['_route' => 'association_delete', '_controller' => 'App\\Controller\\AssociationController::delete', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        741 => [[['_route' => 'newAss', '_controller' => 'App\\Controller\\AssociationController::creerAss', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        772 => [[['_route' => 'groupaction_association', '_controller' => 'App\\Controller\\AssociationController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        796 => [[['_route' => 'edit_association', '_controller' => 'App\\Controller\\AssociationController::editCategorie', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        814 => [[['_route' => 'editt_associations', '_controller' => 'App\\Controller\\AssociationController::edita', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        846 => [[['_route' => 'changevalidite_association', '_controller' => 'App\\Controller\\AssociationController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        869 => [[['_route' => 'deletee_association', '_controller' => 'App\\Controller\\AssociationController::deleteA', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        881 => [[['_route' => 'association_indexP', '_controller' => 'App\\Controller\\AssociationController::indexP', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        893 => [[['_route' => 'association_newP', '_controller' => 'App\\Controller\\AssociationController::newP', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        918 => [[['_route' => 'association_editP', '_controller' => 'App\\Controller\\AssociationController::editP', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        931 => [[['_route' => 'association_ajoutInfo', '_controller' => 'App\\Controller\\AssociationController::ajoutInformation', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        940 => [[['_route' => 'association_deleteP', '_controller' => 'App\\Controller\\AssociationController::deleteP', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, false, null]],
        978 => [[['_route' => 'edit_associationP', '_controller' => 'App\\Controller\\AssociationController::editCategorieP', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        996 => [[['_route' => 'editt_associationsP', '_controller' => 'App\\Controller\\AssociationController::editaP', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1024 => [[['_route' => 'association_index_user', '_controller' => 'App\\Controller\\AssociationController::indexUserAssociations', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1042 => [[['_route' => 'UserAssoci', '_controller' => 'App\\Controller\\AssociationController::UserAssociation', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        1054 => [[['_route' => 'indexx', '_controller' => 'App\\Controller\\IndexController::indexx', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1073 => [[['_route' => 'index10', '_controller' => 'App\\Controller\\AdminController::index20', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1090 => [[['_route' => 'forum', '_controller' => 'App\\Controller\\ForumController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1111 => [[['_route' => 'newTopic', '_controller' => 'App\\Controller\\ForumController::newTopic', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1134 => [[['_route' => 'topiccc', '_controller' => 'App\\Controller\\ForumController::topic', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1163 => [[['_route' => 'editMessage', '_controller' => 'App\\Controller\\ForumController::editMessage', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1183 => [[['_route' => 'groupaction_forum', '_controller' => 'App\\Controller\\ForumController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1197 => [[['_route' => 'forums', '_controller' => 'App\\Controller\\ForumController::indexM', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1222 => [[['_route' => 'topic', '_controller' => 'App\\Controller\\ForumController::topics', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1234 => [[['_route' => 'forumsall', '_controller' => 'App\\Controller\\ForumController::indexFALL', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1263 => [[['_route' => 'suppforum', '_controller' => 'App\\Controller\\ForumController::supprofil', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1281 => [[['_route' => 'adminchats', '_controller' => 'App\\Controller\\ForumController::indexChatAdmin', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1320 => [[['_route' => 'chat_changeV', '_controller' => 'App\\Controller\\ForumController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        1345 => [[['_route' => 'deleteT', '_controller' => 'App\\Controller\\ForumController::deletet', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1368 => [[['_route' => 'opportunite_index', '_controller' => 'App\\Controller\\OpportuniteController::index', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, true, false, null]],
        1384 => [[['_route' => 'opportunite_new', '_controller' => 'App\\Controller\\OpportuniteController::new', '_locale' => 'en'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1406 => [[['_route' => 'opportunite_edit', '_controller' => 'App\\Controller\\OpportuniteController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1429 => [[['_route' => 'OP_new', '_controller' => 'App\\Controller\\OpportuniteController::newPR', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1453 => [[['_route' => 'opportunitesUser', '_controller' => 'App\\Controller\\OpportuniteController::index2', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1467 => [[['_route' => 'opportunitesAdmin', '_controller' => 'App\\Controller\\OpportuniteController::indexOppAdmin', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null]],
        1492 => [[['_route' => 'UserOPP', '_controller' => 'App\\Controller\\OpportuniteController::UserOPP', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0], null, false, true, null]],
        1521 => [[['_route' => 'dd', '_controller' => 'App\\Controller\\OpportuniteController::deletedd', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1551 => [[['_route' => 'opAdminDelete', '_controller' => 'App\\Controller\\OpportuniteController::deleteAdminOP', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1576 => [[['_route' => 'userr_edit', '_controller' => 'App\\Controller\\ParamsUserController::edit', '_locale' => 'en'], ['_locale', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1606 => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1631 => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1659 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset', '_locale' => 'en'], ['_locale', 'token'], null, null, false, true, null]],
        1676 => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::newUser', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1700 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1716 => [[['_route' => 'app_admin_users', '_controller' => 'App\\Controller\\UserController::users', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1732 => [[['_route' => 'app_admin_new_user', '_controller' => 'App\\Controller\\UserController::newUser', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1754 => [[['_route' => 'app_admin_edit_user', '_controller' => 'App\\Controller\\UserController::editUser', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1789 => [[['_route' => 'app_admin_changevalidite_user', '_controller' => 'App\\Controller\\UserController::activate', '_locale' => 'en'], ['_locale', 'id'], ['POST' => 0], null, false, true, null]],
        1806 => [[['_route' => 'app_admin_changepswd', '_controller' => 'App\\Controller\\UserController::changePswd', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1831 => [[['_route' => 'app_admin_delete_user', '_controller' => 'App\\Controller\\UserController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        1851 => [[['_route' => 'app_admin_groupaction_user', '_controller' => 'App\\Controller\\UserController::groupAction', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1869 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1886 => [[['_route' => 'test1', '_controller' => 'App\\Controller\\TestController::index', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1897 => [[['_route' => 'test2', '_controller' => 'App\\Controller\\TestController::index22', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1917 => [[['_route' => 'changepass', '_controller' => 'App\\Controller\\UserController::changePass', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        1940 => [
            [['_route' => 'consultant_index_user', '_controller' => 'App\\Controller\\UserController::indexUserConsultants', '_locale' => 'en'], ['_locale'], ['GET' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
