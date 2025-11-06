<?php 

use Core\Valude;
use Core\App;
use Core\Database;

$db = App::get(Database::class);

$task = $db->query("SELECT * FROM task WHERE id=:id",[
    'id'=>$_GET['id'],
])->FindOrFalse();

$error= [];


if(!(new Valude())::string($_POST['body'],1,10)){
$error['body']='must at least 10';
return view('edit.view.php',[
    'task'=>$task,
    'error'=>$error
]);
}
$currcitid=1;
if(empty($error)){
    $db->query("UPDATE task SET body=:body WHERE id=:id",[
    'body'=>$_POST['body'],
    'id'=>$_GET['id'],
]);
}

location("/to-do-list/");