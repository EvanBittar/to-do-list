<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$tasks = $db->query("SELECT * FROM task")->all();



view('index.view.php',[
    'tasks'=>$tasks
]);

