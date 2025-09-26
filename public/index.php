<?php
const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . 'core/function.php';

require base_path('core/Database.php');
require base_path('core/Router.php');


$routre = new Router();

$routes = require base_path('Route.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$routre->route($uri,$method);