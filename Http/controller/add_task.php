<?php 

use Core\App;
use Core\Valude;

$templates = [
    ["emoji" => "📋", "title" => "Daily Grind"],
    ["emoji" => "🏢", "title" => "Office Hustle Board"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping"],
    ["emoji" => "📚", "title" => "Study Sesh"],
    ["emoji" => "💪", "title" => "Fitness Goals"],
];

$db = App::get(\Core\Database::class);

$error = [];

if(!(new Valude())::string($_POST['title'],1,50)){
$error['title']='Title must be between 1-10 characters';
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
