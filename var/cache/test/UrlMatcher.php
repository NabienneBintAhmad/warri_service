<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/warri' => [[['_route' => 'warri', '_controller' => 'App\\Controller\\WarriController::index'], null, null, null, false, false, null]],
        '/api/system/show' => [[['_route' => 'all_user_system', '_controller' => 'App\\Controller\\WarriController::allus'], null, null, null, true, false, null]],
        '/api/system/add' => [[['_route' => 'add_user_sys', '_controller' => 'App\\Controller\\WarriController::system_add_user'], null, ['POST' => 0], null, false, false, null]],
        '/api/prest/add' => [[['_route' => 'add_prestataire', '_controller' => 'App\\Controller\\WarriController::add_prestataire'], null, ['POST' => 0], null, false, false, null]],
        '/api/prest/show' => [[['_route' => 'show_prestataire', '_controller' => 'App\\Controller\\WarriController::show_prestataire'], null, null, null, false, false, null]],
        '/api/prest/user/add' => [[['_route' => 'add_user_prestataire', '_controller' => 'App\\Controller\\WarriController::add_user_prestataire'], null, ['POST' => 0], null, false, false, null]],
        '/api/prest/users/show' => [[['_route' => 'app_warri_show_user_prestataire', '_controller' => 'App\\Controller\\WarriController::show_user_prestataire'], null, null, null, false, false, null]],
        '/api/compte/show' => [[['_route' => 'show_compte', '_controller' => 'App\\Controller\\WarriController::show_compte'], null, null, null, false, false, null]],
        '/api/compte/add' => [[['_route' => 'add_compte', '_controller' => 'App\\Controller\\WarriController::add_compte'], null, null, null, false, false, null]],
        '/api/transaction/add' => [[['_route' => 'add_transaction', '_controller' => 'App\\Controller\\WarriController::add_transaction'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/(?'
                        .'|system/(?'
                            .'|show/([^/]++)(*:41)'
                            .'|block/([^/]++)(*:62)'
                            .'|edit/([^/]++)(*:82)'
                        .')'
                        .'|prest/(?'
                            .'|show/([^/]++)(*:112)'
                            .'|user/show/([^/]++)(*:138)'
                            .'|block/([^/]++)(*:160)'
                        .')'
                        .'|transaction/show/([^/]++)(*:194)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:231)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:262)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:301)'
                            .'|mpte_prestataires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:347)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:385)'
                                .')'
                            .')'
                        .')'
                        .'|transactions(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:429)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:467)'
                            .')'
                        .')'
                        .'|user_(?'
                            .'|prestataires(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:518)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:556)'
                                .')'
                            .')'
                            .'|systemes(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:595)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:633)'
                                .')'
                            .')'
                        .')'
                        .'|entreprise_prestataires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:688)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:726)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'one_user_system', '_controller' => 'App\\Controller\\WarriController::one_us'], ['id'], null, null, false, true, null]],
        62 => [[['_route' => 'block_user_system', '_controller' => 'App\\Controller\\WarriController::block_user_sys'], ['id'], null, null, false, true, null]],
        82 => [[['_route' => 'edit_user_system', '_controller' => 'App\\Controller\\WarriController::edit_user_sys'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => 'show_one_prestataire', '_controller' => 'App\\Controller\\WarriController::show_one_prestataire'], ['id'], null, null, false, true, null]],
        138 => [[['_route' => 'one_user_show', '_controller' => 'App\\Controller\\WarriController::show_one_user_prestataire'], ['id'], null, null, false, true, null]],
        160 => [[['_route' => 'block_user', '_controller' => 'App\\Controller\\WarriController::block_user_prest'], ['id'], null, null, false, true, null]],
        194 => [[['_route' => 'show_transaction', '_controller' => 'App\\Controller\\WarriController::show_trans'], ['cmpt'], null, null, false, true, null]],
        231 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        262 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        301 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        347 => [
            [['_route' => 'api_compte_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        385 => [
            [['_route' => 'api_compte_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_compte_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_compte_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        429 => [
            [['_route' => 'api_transactions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        467 => [
            [['_route' => 'api_transactions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_transactions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        518 => [
            [['_route' => 'api_user_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        556 => [
            [['_route' => 'api_user_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_user_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        595 => [
            [['_route' => 'api_user_systemes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_systemes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        633 => [
            [['_route' => 'api_user_systemes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_systemes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_user_systemes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        688 => [
            [['_route' => 'api_entreprise_prestataires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_entreprise_prestataires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        726 => [
            [['_route' => 'api_entreprise_prestataires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_entreprise_prestataires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_entreprise_prestataires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
