<?php
const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . 'core/function.php';

session_start();

require base_path('core/Router.php');


spl_autoload_register(function ($class){
$class =  str_replace("\\",DIRECTORY_SEPARATOR,$class);
require_once base_path('core/' . $class.'.php');
});
$routre = new Router();

$routes = require base_path('Route.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$routre->route($uri,$method);