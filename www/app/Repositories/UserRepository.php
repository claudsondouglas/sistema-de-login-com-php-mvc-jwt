<?php
namespace App\Repositories;

class UserRepository extends Repository {
    protected $table = 'users';

    protected $fillable = 'id, email';
}