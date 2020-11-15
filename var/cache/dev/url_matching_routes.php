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
        '/commande/index' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/user' => [[['_route' => 'commande_find_by_user', '_controller' => 'App\\Controller\\CommandeController::indexForUser'], null, ['GET' => 0], null, false, false, null]],
        '/ligneCommande/add' => [[['_route' => 'ligne_commande_add', '_controller' => 'App\\Controller\\LigneCommandeController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/index' => [[['_route' => 'panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/panier/delete/all' => [[['_route' => 'panier_delete_all', '_controller' => 'App\\Controller\\PanierController::deleteAllOnPanier'], null, ['DELETE' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/addProduit' => [[['_route' => 'add', '_controller' => 'App\\Controller\\ProduitController::addProduit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/delete' => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ProduitController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\SecurityController::inscription'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'admin_main', '_controller' => 'App\\Controller\\admin\\AdminController::stat'], null, ['GET' => 0], null, true, false, null]],
        '/admin/index' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\admin\\AdminController::stat'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/panier/(?'
                    .'|add/produit/([^/]++)(*:200)'
                    .'|delete/produit/([^/]++)(*:231)'
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
        200 => [[['_route' => 'panier_addProduit', '_controller' => 'App\\Controller\\PanierController::addOnPanier'], ['id'], ['POST' => 0], null, false, true, null]],
        231 => [
            [['_route' => 'panier_delete_panier', '_controller' => 'App\\Controller\\PanierController::deleteOnPanier'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
