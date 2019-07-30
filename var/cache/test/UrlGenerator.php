<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/api/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/api/login']], [], []],
    'warri' => [[], ['_controller' => 'App\\Controller\\WarriController::index'], [], [['text', '/api/warri']], [], []],
    'all_user_system' => [[], ['_controller' => 'App\\Controller\\WarriController::allus'], [], [['text', '/api/system/show/']], [], []],
    'one_user_system' => [['id'], ['_controller' => 'App\\Controller\\WarriController::one_us'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/system/show']], [], []],
    'add_user_sys' => [[], ['_controller' => 'App\\Controller\\WarriController::system_add_user'], [], [['text', '/api/system/add']], [], []],
    'add_prestataire' => [[], ['_controller' => 'App\\Controller\\WarriController::add_prestataire'], [], [['text', '/api/prest/add']], [], []],
    'show_prestataire' => [[], ['_controller' => 'App\\Controller\\WarriController::show_prestataire'], [], [['text', '/api/prest/show']], [], []],
    'show_one_prestataire' => [['id'], ['_controller' => 'App\\Controller\\WarriController::show_one_prestataire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/prest/show']], [], []],
    'add_user_prestataire' => [[], ['_controller' => 'App\\Controller\\WarriController::add_user_prestataire'], [], [['text', '/api/prest/user/add']], [], []],
    'app_warri_show_user_prestataire' => [[], ['_controller' => 'App\\Controller\\WarriController::show_user_prestataire'], [], [['text', '/api/prest/user/show']], [], []],
    'one_user_show' => [['id'], ['_controller' => 'App\\Controller\\WarriController::show_one_user_prestataire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/prest/user/show']], [], []],
    'show_compte' => [[], ['_controller' => 'App\\Controller\\WarriController::show_compte'], [], [['text', '/api/compte/show']], [], []],
    'add_compte' => [[], ['_controller' => 'App\\Controller\\WarriController::add_compte'], [], [['text', '/api/compte/add']], [], []],
    'add_transaction' => [[], ['_controller' => 'App\\Controller\\WarriController::add_transaction'], [], [['text', '/api/transaction/add']], [], []],
    'show_transaction' => [['cmpt'], ['_controller' => 'App\\Controller\\WarriController::show_trans'], [], [['variable', '/', '[^/]++', 'cmpt', true], ['text', '/api/transaction/show']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'api_transactions_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/transactions']], [], []],
    'api_transactions_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/transactions']], [], []],
    'api_transactions_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_transactions_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_transactions_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/transactions']], [], []],
    'api_user_prestataires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/user_prestataires']], [], []],
    'api_user_prestataires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/user_prestataires']], [], []],
    'api_user_prestataires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/user_prestataires']], [], []],
    'api_user_prestataires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/user_prestataires']], [], []],
    'api_user_prestataires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserPrestataire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/user_prestataires']], [], []],
    'api_entreprise_prestataires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/entreprise_prestataires']], [], []],
    'api_entreprise_prestataires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/entreprise_prestataires']], [], []],
    'api_entreprise_prestataires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/entreprise_prestataires']], [], []],
    'api_entreprise_prestataires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/entreprise_prestataires']], [], []],
    'api_entreprise_prestataires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\EntreprisePrestataire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/entreprise_prestataires']], [], []],
    'api_compte_prestataires_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/compte_prestataires']], [], []],
    'api_compte_prestataires_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/compte_prestataires']], [], []],
    'api_compte_prestataires_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/compte_prestataires']], [], []],
    'api_compte_prestataires_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/compte_prestataires']], [], []],
    'api_compte_prestataires_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ComptePrestataire', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/compte_prestataires']], [], []],
    'api_user_systemes_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/user_systemes']], [], []],
    'api_user_systemes_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/user_systemes']], [], []],
    'api_user_systemes_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/user_systemes']], [], []],
    'api_user_systemes_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/user_systemes']], [], []],
    'api_user_systemes_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserSystemes', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/user_systemes']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
];
