<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'commande_index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande/index']], [], []],
    'commande_find_by_user' => [[], ['_controller' => 'App\\Controller\\CommandeController::indexForUser'], [], [['text', '/commande/user']], [], []],
    'ligne_commande_add' => [[], ['_controller' => 'App\\Controller\\LigneCommandeController::add'], [], [['text', '/ligneCommande/add']], [], []],
    'panier_index' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier/index']], [], []],
    'panier_addProduit' => [['id'], ['_controller' => 'App\\Controller\\PanierController::addOnPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/add/produit']], [], []],
    'panier_delete_all' => [[], ['_controller' => 'App\\Controller\\PanierController::deleteAllOnPanier'], [], [['text', '/panier/delete/all']], [], []],
    'panier_delete_panier' => [['id'], ['_controller' => 'App\\Controller\\PanierController::deleteOnPanier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/panier/delete/produit']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/']], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\ProduitController::addProduit'], [], [['text', '/addProduit']], [], []],
    'delete' => [[], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['text', '/delete']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\SecurityController::inscription'], [], [['text', '/inscription']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'admin_main' => [[], ['_controller' => 'App\\Controller\\admin\\AdminController::stat'], [], [['text', '/admin/']], [], []],
    'admin_index' => [[], ['_controller' => 'App\\Controller\\admin\\AdminController::stat'], [], [['text', '/admin/index']], [], []],
];
