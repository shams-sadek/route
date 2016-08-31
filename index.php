<?php

// require 'vendor/autoload.php';

require 'core/bootstrap.php';


$router = new Router;


require 'routes.php';

// var_dump($_SERVER);

$uri = trim($_SERVER['REQUEST_URI'],'/') ;
$uri = trim($uri,'sadek') ;
$uri = trim($uri,'/') ;


require $router->direct($uri);
