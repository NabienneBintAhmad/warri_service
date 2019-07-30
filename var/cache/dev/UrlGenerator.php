<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/api/register']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/api/login']], [], []],
    'warri' => [[], ['_controller' => 'App\\Controller\\WarriController::index'], [], [['text', '/api/warri']], [], []],
    'all_user_system' => [[], ['_controller' => 'App\\Controller\\WarriController::allus'], [], [['text', '/api/system/show/']], [], []],
    'one_user_system' => [['id'], ['_controller' => 'App\\Controller\\WarriController::one_us'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/system/show']], [], []],
    'add_user_sys' => [[], ['_controller' => 'App\\Controller\\WarriController::system_add_user'], [], [['text', '/api/system/add']], [], []],
    'block_user_system' => [['cni'], ['_controller' => 'App\\Controller\\WarriController::block_user_system'], [], [['variable', '/', '[^/]++', 'cni', true], ['text', '/api/system/block']], [], []],
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
