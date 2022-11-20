<?php

declare(strict_types=1);

namespace App\Middlewares;

use App\Facades\Response;
use App\Services\Token;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class AuthenticationMiddleware implements MiddlewareInterface {
    /**
     * {@inheritdoc}
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface {
        $response = $handler->handle($request);

        if (!isset($request->getCookieParams()['token'])) {
            return $response->withHeader('Location', '/');
        }

        try {
            $token = Token::decode($request->getCookieParams()['token']);
        } catch (\Exception $e) {
            setcookie('token', '', time() - 3600, '/');
            return $response->withHeader('Location', '/');
        }

        return $response;
    }
}
