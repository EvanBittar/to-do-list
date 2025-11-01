<?php 

use Core\App;
use Core\Valude;
use Core\Database;

$db = App::get(Database::class);

// dd($db);

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
// id - body - active - user_id