<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/(?'
                    .'|article/(?'
                        .'|([^/]++)(*:36)'
                        .'|update/([^/]++)(*:58)'
                        .'|delete/([^/]++)(*:80)'
                    .')'
                    .'|category/(?'
                        .'|update/([^/]++)(*:115)'
                        .'|delete/([^/]++)(*:138)'
                    .')'
                .')'
                .'|/comment/delete/([^/]++)(*:172)'
                .'|/home/([^/]++)(*:194)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], null, null, false, true, null]],
        58 => [[['_route' => 'article_update', '_controller' => 'App\\Controller\\ArticleController::update'], ['id'], null, null, false, true, null]],
        80 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], null, null, false, true, null]],
        115 => [[['_route' => 'category_update', '_controller' => 'App\\Controller\\CategoryController::update'], ['id'], null, null, false, true, null]],
        138 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], null, null, false, true, null]],
        172 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], null, null, false, true, null]],
        194 => [
            [['_route' => 'home_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
