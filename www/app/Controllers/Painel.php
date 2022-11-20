<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Painel extends Controller {
    function index(Request $request) {
        return $this->view->render('painel/index', [
            'name' => 'consagrado'
        ]);
    }
}
