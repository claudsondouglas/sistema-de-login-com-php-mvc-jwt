<?php

namespace App\Services;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;

class Token {
    const KEY = "Y11Y7vJftb8W6DwQ@!tp6hHoVp@g0Ii#n5Q66^ZbDBX6ODuEWm";

    public static function generate($data) {
        $jwt = JWT::encode([
            'iss' => $_SERVER['HTTP_HOST'],
            'exp' => time() + 172800,
            ...$data
        ], self::KEY, 'HS256');

        return $jwt;
    }

    public static function decode($token) {
        try {
            $decoded = JWT::decode($token, new Key(self::KEY, 'HS256'));
        } catch (SignatureInvalidException $e) {
            throw new \Exception('Token inválido');
        }
        
        return json_encode($decoded);
    }
}
