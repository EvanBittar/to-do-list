<?php

use Core\Router;
use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH  . 'vendor/autoload.php';

require BASE_PATH . 'core/function.php';

session_start();

require base_path('core/Router.php');

require base_path('bootstrap.php');

$routre = new Router();

$routes = require base_path('Route.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
try{
    $routre->route($uri,$method);
}catch(ValidationException $e){
Session::flash('errors',$e->errors);
Session::flash('old',$e->oldData);

return location($routre->previosURL());
}

Session::unflash();