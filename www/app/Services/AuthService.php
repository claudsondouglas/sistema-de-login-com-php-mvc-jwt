<?php
namespace App\Services;

use App\Repositories\UserRepository;

class AuthService {
    public static function login($email, $password) {
        $repository = new UserRepository();
        $user = $repository->findBy('email', $email, '*');

        if (!$user) {
            throw new \Exception('not found');
        }

        if (!password_verify($password, $user['password'])) {
            throw new \Exception('invalid password');
        }

        $jwt = Token::generate([
            'id' => $user['id'],
            'email' => $user['email']
        ]);

        setcookie('token', $jwt, time() + 172800, '/');
    }
}