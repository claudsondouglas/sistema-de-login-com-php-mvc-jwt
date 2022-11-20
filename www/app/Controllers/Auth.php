<?php

namespace App\Controllers;

use App\Facades\Response;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use App\Services\Token;
use Psr\Http\Message\ServerRequestInterface as Request;

class Auth extends Controller {
    public function login(Request $request) {

        try {
            AuthService::login(
                $request->getParsedBody()['email'],
                $request->getParsedBody()['password']
            );

            return Response::redirect('/painel');
        } catch (\Exception $e) {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['old'] = $request->getParsedBody();
            
            if ($e->getMessage() === 'not found') {
                return Response::redirect('/?error=not-found');
            }
            if ($e->getMessage() === 'invalid password') {
                return Response::redirect('/?error=invalid-password');
            }
        }
    }
}
