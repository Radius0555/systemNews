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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\ArticleController::index'], null, null, null, false, false, null]],
        '/admin/article/create' => [[['_route' => 'article_create', '_controller' => 'App\\Controller\\ArticleController::create'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, null, null, false, false, null]],
        '/comment/create' => [[['_route' => 'comment_create', '_controller' => 'App\\Controller\\CommentController::create'], null, null, null, false, false, null]],
        '/comment/id' => [[['_route' => 'comment_update', '_controller' => 'App\\Controller\\CommentController::update'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'home_list', '_controller' => 'App\\Controller\\HomeController::list'], null, null, null, false, false, null]],
        '/app_login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|article/(?'
                        .'|([^/]++)(*:198)'
                        .'|update/([^/]++)(*:221)'
                        .'|delete/([^/]++)(*:244)'
                    .')'
                    .'|category/(?'
                        .'|update/([^/]++)(*:280)'
                        .'|delete/([^/]++)(*:303)'
                    .')'
                .')'
                .'|/comment/delete/([^/]++)(*:337)'
                .'|/home/([^/]++)(*:359)'
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
        198 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], null, null, false, true, null]],
        244 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'category_update', '_controller' => 'App\\Controller\\CategoryController::update'], ['id'], null, null, false, true, null]],
        303 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        337 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], null, null, false, true, null]],
        359 => [
            [['_route' => 'home_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
