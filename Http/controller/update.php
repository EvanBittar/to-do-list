<?php 

$templates = [
    ["emoji" => "📋", "title" => "Daily Grind"],
    ["emoji" => "🏢", "title" => "Office Hustle Board"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping"],
    ["emoji" => "📚", "title" => "Study Sesh"],
    ["emoji" => "💪", "title" => "Fitness Goals"],
];

use Core\Valude;

$error= [];

if (!(new Valude())::string($_POST['title'],1,50)){
    $error['title']='must at least 1-50';
    return view('edit.view.php',[
    'templates'=>$templates,
    // 'title'=>$title,
    // 'emoji'=>$emoji,
    // 'error'=>$error
    ]);
}





















// use Core\App;
// use Core\Database;
// $templates = [
//     ["emoji" => "📋", "title" => "Daily Grind"],
//     ["emoji" => "🏢", "title" => "Office Hustle Board"],
//     ["emoji" => "🛒", "title" => "Weekly Groove Shopping"],
//     ["emoji" => "📚", "title" => "Study Sesh"],
//     ["emoji" => "💪", "title" => "Fitness Goals"],
// ];

// $db = App::get(Database::class);

// $task = $db->query("SELECT * FROM tasks WHERE id=:id",[
//     'id'=>$_POST['id'],
// ])->FindOrFalse();



// $title = $task['title'];
// $emoji = $task['emoji'];

// if(!(new Valude())::string($_POST['title'],1,10)){
// $error['title']='must at least 10';
// return view('edit.view.php',[
//     'templates'=>$templates,
//     'title'=>$title,
//     'emoji'=>$emoji,
//     'error'=>$error
// ]);
// }

// if(empty($error)){
//     $db->query("UPDATE tasks SET title=:title WHERE id=:id",[
//     'title'=>$_POST['title'],
//     'id'=>$_POST['id'],
// ]);
// }

// location("/to-do-list/");

// array(3) {
//   ["id"]=>
//   string(1) "4"
//   ["emoji"]=>
//   string(4) "📚"
//   ["title"]=>
//   string(3) "yes"
// }