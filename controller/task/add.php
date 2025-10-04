<?php 

$config = require base_path('config.php');
$db = new Database($config);
$tasks = $db->query("SELECT * FROM task")->all();
// dd('yews');
$error= [];


if(!(new Valude())::string($_POST['body'],1,10)){
$error['body']='must at least 10';
return view('index.view.php',[
    'tasks'=>$tasks,
    'error'=>$error
]);
}
$currcitid=1;
if(empty($error)){
    $db->query("INSERT INTO task (body,active,user_id) VALUES
(:body,:active,:user_id);",[
    'body'=>$_POST['body'],
    'active'=>0,
    'user_id'=>$currcitid,
]);
}

location("/to-do-list/");