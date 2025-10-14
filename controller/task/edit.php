<?php 

use Core\Database;
$config = require base_path('config.php');
$db = new Database($config);
$task = $db->query("SELECT * FROM task WHERE id=:id",[
    'id'=>$_GET['id'],
])->FindOrFalse();


return view('edit.view.php',[
    'task'=>$task,
]);