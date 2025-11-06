<?php 

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$task = $db->query("SELECT * FROM task WHERE id=:id",[
    'id'=>$_GET['id'],
])->FindOrFalse();


return view('edit.view.php',[
    'task'=>$task,
]);