<?php 

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$tasks = $db->query("SELECT * FROM task WHERE active != 0")->all();

view('index.view.php',[
    'tasks'=>$tasks
]);