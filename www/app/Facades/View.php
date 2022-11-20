<?php

namespace App\Facades;

class View {
    static function render($view, $data = []) {
        $loader = new \Twig\Loader\FilesystemLoader('../views');
        $twig = new \Twig\Environment($loader, [
            'cache' => '../cache',
            'debug' => true
        ]);

        $getFunction = new \Twig\TwigFunction('get', function ($key) {
            return $_GET[$key] ?? null;
        });

        $twig->addFunction($getFunction);


        $function = new \Twig\TwigFunction('old', function ($key) {
            if (!isset($_SESSION)) {
                session_start();
            }
            return isset($_SESSION['old'][$key]) ? $_SESSION['old'][$key] : null;
        });
        $twig->addFunction($function);

        $html = $twig->render("$view.twig", $data);

        $response = new \Laminas\Diactoros\Response\HtmlResponse(
            $html,
            200,
            ['Content-Type' => ['text/html; charset=utf-8']]
        );

        return $response;
    }
}
