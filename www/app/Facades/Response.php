<?php
namespace App\Facades;

class Response {
    function __construct() {
        $this->response = new \Laminas\Diactoros\Response;
    }

    // invoke 
    public static function text($data) {
        $response = new \Laminas\Diactoros\Response\TextResponse($data);
        return $response;
    }

    public static function json($data) {
        $response = new \Laminas\Diactoros\Response\JsonResponse($data);
        return $response;
    }

    public static function redirect($url) {
        $response = new \Laminas\Diactoros\Response\RedirectResponse($url);
        return $response;
    }
}