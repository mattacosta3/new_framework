<?php

use app\core\Router;
use app\core\Request;


require 'vendor\autoload.php';

$database = require 'core/bootstrap.php';

// $router = new Router;
// require 'routes.php'; which basically call the define method for $router class and passes through all the routes as the identity
// Request URI
// require $router->direct($uri);


Router::load('routes.php')
    ->direct(Request::uri(), Request::method());


// $W = Router::load('routes.php');

// var_dump($W);