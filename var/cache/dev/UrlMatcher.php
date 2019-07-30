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
        '/api/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/warri' => [[['_route' => 'warri', '_controller' => 'App\\Controller\\WarriController::index'], null, null, null, false, false, null]],
        '/api/system/show' => [[['_route' => 'all_user_system', '_controller' => 'App\\Controller\\WarriController::allus'], null, null, null, true, false, null]],
        '/api/system/add' => [[['_route' => 'add_user_sys', '_controller' => 'App\\Controller\\WarriController::system_add_user'], null, ['POST' => 0], null, false, false, null]],
        '/api/prest/add' => [[['_route' => 'add_prestataire', '_controller' => 'App\\Controller\\WarriController::add_prestataire'], null, ['POST' => 0], null, false, false, null]],
        '/api/prest/show' => [[['_route' => 'show_prestataire', '_controller' => 'App\\Controller\\WarriController::show_prestataire'], null, null, null, false, false, null]],
        '/api/prest/user/add' => [[['_route' => 'add_user_prestataire', '_controller' => 'App\\Controller\\WarriController::add_user_prestataire'], null, ['POST' => 0], null, false, false, null]],
        '/api/prest/user/show' => [[['_route' => 'app_warri_show_user_prestataire', '_controller' => 'App\\Controller\\WarriController::show_user_prestataire'], null, null, null, false, false, null]],
        '/api/compte/show' => [[['_route' => 'show_compte', '_controller' => 'App\\Controller\\WarriController::show_compte'], null, null, null, false, false, null]],
        '/api/compte/add' => [[['_route' => 'add_compte', '_controller' => 'App\\Controller\\WarriController::add_compte'], null, null, null, false, false, null]],
        '/api/transaction/add' => [[['_route' => 'add_transaction', '_controller' => 'App\\Controller\\WarriController::add_transaction'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                .'|/api(?'
                    .'|/(?'
                        .'|system/(?'
                            .'|show/([^/]++)(*:203)'
                            .'|block/([^/]++)(*:225)'
                            .'|edit/([^/]++)(*:246)'
                        .')'
                        .'|prest/(?'
                            .'|show/([^/]++)(*:277)'
                            .'|user/show/([^/]++)(*:303)'
                        .')'
                        .'|transaction/show/([^/]++)(*:337)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:374)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:405)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:444)'
                            .'|mpte_prestataires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:490)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:528)'
                                .')'
                            .')'
                        .')'
                        .'|transactions(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:572)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:610)'
                            .')'
                        .')'
                        .'|user_(?'
                            .'|prestataires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:661)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:699)'
                                .')'
                            .')'
                            .'|systemes(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:738)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:776)'
                                .')'
                            .')'
                        .')'
                        .'|entreprise_prestataires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:831)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:869)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'one_user_system', '_controller' => 'App\\Controller\\WarriController::one_us'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'block_user_system', '_controller' => 'App\\Controller\\WarriController::block_user_sys'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'edit_user_system', '_controller' => 'App\\Controller\\WarriController::edit_user_sys'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'show_one_prestataire', '_controller' => 'App\\Controller\\WarriController::show_one_prestataire'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'one_user_show', '_controller' => 'App\\Controller\\WarriController::show_one_user_prestataire'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'show_transaction', '_controller' => 'App\\Controller\\WarriController::show_trans'], ['cmpt'], null, null, false, true, null]],
        374 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        405 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        444 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        490 => [
            [['_route' => 'api_compte_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        528 => [
            [['_route' => 'api_compte_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_compte_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        572 => [
            [['_route' => 'api_transactions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        610 => [
            [['_route' => 'api_transactions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_transactions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        661 => [
            [['_route' => 'api_user_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        699 => [
            [['_route' => 'api_user_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_user_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        738 => [
            [['_route' => 'api_user_systemes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_systemes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        776 => [
            [['_route' => 'api_user_systemes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_systemes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_user_systemes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        831 => [
            [['_route' => 'api_entreprise_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_entreprise_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        869 => [
            [['_route' => 'api_entreprise_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_entreprise_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_entreprise_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
