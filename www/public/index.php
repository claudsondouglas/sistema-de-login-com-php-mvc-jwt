<?php
use App\Facades\Router;

require '../vendor/autoload.php';
//These are the defined authentication environment in the db service
/*
// The MySQL service named in the docker-compose.yml.
$host = 'mysql';

// Database use name
$user = 'poticms';

//database user password
$pass = 'password';

// check the MySQL connection status
$conn = new mysqli($host, $user, $pass);
*/

Router::dispatch();