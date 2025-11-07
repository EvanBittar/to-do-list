<?php 

$templates = [
    ["emoji" => "📋", "title" => "Daily Grind"],
    ["emoji" => "🏢", "title" => "Office Hustle Board"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping"],
    ["emoji" => "📚", "title" => "Study Sesh"],
    ["emoji" => "💪", "title" => "Fitness Goals"],
];

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$task = $db->query("SELECT * FROM tasks WHERE id=:id",[
    'id'=>$_GET['id'],
])->FindOrFalse();

$title = $task['title'];
$emoji = $task['emoji'];
return view('edit.view.php',[
    'templates'=>$templates,
    'title'=>$title,
    'emoji'=>$emoji,
]);