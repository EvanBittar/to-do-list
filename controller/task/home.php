<?php

use Core\Database;
$config = require base_path( 'config.php');
$db = new Database($config);

$tasks = $db->query("SELECT * FROM task")->all();



view('index.view.php',[
    'tasks'=>$tasks
]);

