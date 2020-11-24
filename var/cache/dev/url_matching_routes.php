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
        '/ligneCommande/add' => [[['_route' => 'ligne_commande_add', '_controller' => 'App\\Controller\\LigneCommandeController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/index' => [[['_route' => 'panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/panier/delete/all' => [[['_route' => 'panier_delete_all', '_controller' => 'App\\Controller\\PanierController::deleteAllOnPanier'], null, ['DELETE' => 0], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/addProduit' => [[['_route' => 'add', '_controller' => 'App\\Controller\\ProduitController::addProduit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/delete' => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ProduitController::delete'], null, ['DELETE' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\SecurityController::inscription'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/commande/index' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\User\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/user' => [[['_route' => 'commande_find_by_user', '_controller' => 'App\\Controller\\User\\CommandeController::indexForUser'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\User\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/user' => [[['_route' => 'commentaire_index_user', '_controller' => 'App\\Controller\\User\\CommentaireController::indexUser'], null, ['GET' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\User\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/parameter' => [[['_route' => 'user_parameter', '_controller' => 'App\\Controller\\User\\UserController::parameterProfil'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/p(?'
                    .'|anier/(?'
                        .'|add/produit/([^/]++)(*:203)'
                        .'|delete/produit/([^/]++)(*:234)'
                    .')'
                    .'|roduit/([^/]++)(*:258)'
                .')'
                .'|/edit/([^/]++)/produit(*:289)'
                .'|/comm(?'
                    .'|ande/valide/([^/]++)(*:325)'
                    .'|entaire/(?'
                        .'|add/([^/]++)(*:356)'
                        .'|delete/([^/]++)(*:379)'
                    .')'
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
        203 => [[['_route' => 'panier_addProduit', '_controller' => 'App\\Controller\\PanierController::addOnPanier'], ['id'], ['POST' => 0], null, false, true, null]],
        234 => [[['_route' => 'panier_delete_panier', '_controller' => 'App\\Controller\\PanierController::deleteOnPanier'], ['id'], ['DELETE' => 0], null, false, true, null]],
        258 => [[['_route' => 'id', '_controller' => 'App\\Controller\\ProduitController::getProduit'], ['id'], ['GET' => 0], null, false, true, null]],
        289 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0], null, false, false, null]],
        325 => [[['_route' => 'commande_valide_commande', '_controller' => 'App\\Controller\\User\\CommandeController::valideCommande'], ['id'], ['POST' => 0], null, false, true, null]],
        356 => [[['_route' => 'commentaire_add', '_controller' => 'App\\Controller\\User\\CommentaireController::addCommentaire'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [
            [['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\User\\CommentaireController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
