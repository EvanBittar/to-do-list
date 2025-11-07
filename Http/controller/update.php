<?php 
// dd($_POST);
$templates = [
    ["emoji" => "📋", "title" => "Daily Grind"],
    ["emoji" => "🏢", "title" => "Office Hustle Board"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping"],
    ["emoji" => "📚", "title" => "Study Sesh"],
    ["emoji" => "💪", "title" => "Fitness Goals"],
];

use Core\Valude;
use Core\App;
use Core\Database;

$error= [];


$db = App::get(Database::class);

$task = $db->query("SELECT * FROM tasks WHERE id=:id",[
    'id'=>$_POST['id'],
])->FindOrFalse();

$title = $task['title'] ?? '';
$emoji = $task['emoji'] ?? '';


if (!(new Valude())::string(trim($_POST['title']), 1, 50)) {
    $error['title'] = 'Title must be between 1-50 characters';
    return view('edit.view.php', [
        'templates' => $templates,
        'title' => $title,
        'emoji' => $emoji,
        'error' => $error
    ]);
}

if (empty($error)) {
    $db->query("UPDATE tasks SET title = :title, emoji = :emoji WHERE id = :id", [
        'title' => trim($_POST['title']),
        'emoji' => $_POST['emoji'],
        'id' => $_POST['id']
    ]);
}

location("/to-do-list/");
