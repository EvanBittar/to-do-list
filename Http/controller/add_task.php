<?php 

use Core\App;
use Core\Valude;


$db = App::get(\Core\Database::class);

$error = [];

if(!(new Valude())::string($_POST['title'],1,10)){
$error['title']='must at least 10';
return view('add.view.php',[
    'templates'=>$templates, 
    'error'=>$error
]);
}

if(empty($error)){
$db->query("INSERT INTO tasks (emoji, title) VALUES (:emoji, :title)", [
    'title' => $_POST['title'],
    'emoji' => $_POST['emoji'],
]);
}

location("/to-do-list/");

// array(4) {
//   ["_method"]=>
//   string(3) "PUT"
//   ["emoji"]=>
//   string(4) "📋"
//   ["title"]=>
//   string(3) "yes"
//   ["add_task"]=>
//   string(0) ""
// }