<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'article' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/admin/article']], [], [], []],
    'article_create' => [[], ['_controller' => 'App\\Controller\\ArticleController::create'], [], [['text', '/admin/article/create']], [], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'article_update' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article/update']], [], [], []],
    'article_delete' => [['id'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article/delete']], [], [], []],
    'category' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/admin/category']], [], [], []],
    'category_create' => [[], ['_controller' => 'App\\Controller\\CategoryController::create'], [], [['text', '/admin/category/create']], [], [], []],
    'category_update' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/update']], [], [], []],
    'category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category/delete']], [], [], []],
    'comment_create' => [[], ['_controller' => 'App\\Controller\\CommentController::create'], [], [['text', '/comment/create']], [], [], []],
    'comment_update' => [[], ['_controller' => 'App\\Controller\\CommentController::update'], [], [['text', '/comment/id']], [], [], []],
    'comment_delete' => [['id'], ['_controller' => 'App\\Controller\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/comment/delete']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'home_list' => [[], ['_controller' => 'App\\Controller\\HomeController::list'], [], [['text', '/list']], [], [], []],
    'home_show' => [['id'], ['_controller' => 'App\\Controller\\HomeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/home']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/app_login']], [], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile']], [], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/registration']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
];
