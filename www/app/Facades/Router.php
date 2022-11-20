<?php

namespace App\Facades;

class Router {
    public static function dispatch() {
        $request = \Laminas\Diactoros\ServerRequestFactory::fromGlobals(
            $_SERVER,
            $_GET,
            $_POST,
            $_COOKIE,
            $_FILES
        );

        $router = new \League\Route\Router;
        
        require '../routes/web.php';

        $response = $router->dispatch($request);

        // send the response to the browser
        return (new \Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
    }
}
