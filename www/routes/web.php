<?php
$router->get('/', 'App\Controllers\Web::index');
$router->post('/auth/login', 'App\Controllers\Auth::login');

$router->group('/painel', function($router) {
    $router->get('/', 'App\Controllers\Painel::index');
})->middleware(new \App\Middlewares\AuthenticationMiddleware);