<?php
namespace App\Controllers;

use App\Facades\View;

class Controller {
    function __construct() {
        $this->view = new View();
    }
}