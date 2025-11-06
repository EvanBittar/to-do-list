<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$tasks = $db->query("SELECT * FROM tasks")->all();

$title =  [
    ["emoji" => "📋", "title" => "Daily Grind", "desc" => "For everyday hustle and tasks"],
    ["emoji" => "🏢", "title" => "Office Hustle Board", "desc" => "Organize your 9-to-5"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping", "desc" => "Weekly household shopping"],
    ["emoji" => "📚", "title" => "Study Sesh", "desc" => "Plan school or uni tasks"],
    ["emoji" => "💪", "title" => "Fitness Goals", "desc" => "Track workouts & health goals"],
];

view('index.view.php',[
    'tasks'=>$tasks,
    'title'=>$title
]);

