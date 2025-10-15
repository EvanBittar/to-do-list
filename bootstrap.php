<?php 

use Core\App;
use Core\Database;
use Core\container;

$container = new container();

$container->add('Core\Database', function(){
    $config = require base_path('config.php');

    return new Database($config);
});

// dd($container->get('core\Database'));

App::setContainer($container);