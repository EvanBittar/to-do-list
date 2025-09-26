<?php 
require base_path('core/Valude.php');
$config = require base_path('config.php');
$db = new Database($config);
$tasks = $db->query("SELECT * FROM task")->all();

$error= [];


if(!(new Valude())::string($_POST['body'],1,10)){
$error['body']='must at least 10';
return view('index.view.php',[
    'tasks'=>$tasks,
    'error'=>$error
]);
}

if(empty($error)){
    $db->query("INSERT INTO task (body,active) VALUES
(:body,:active);",[
    'body'=>$_POST['body'],
    'active'=>0
]);
}

header("location: /to-do-list/");
exit;