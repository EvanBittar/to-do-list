<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

// Get the current date or use the one from the query string
$currentDate = $_GET['date'] ?? date('Y-m-d');

// Build the query based on date parameters
$query = "SELECT * FROM tasks WHERE 1=1";
$params = [];

if (isset($_GET['date_from']) && isset($_GET['date_to'])) {
    // Date range filter (for week views)
    $query .= " AND DATE(created_at) BETWEEN :date_from AND :date_to";
    $params['date_from'] = $_GET['date_from'];
    $params['date_to'] = $_GET['date_to'];
} else {
    // Single date filter
    $query .= " AND DATE(created_at) = :date";
    $params['date'] = $currentDate;
}

$query .= " ORDER BY created_at DESC";

$tasks = $db->query($query, $params)->all();

$title =  [
    ["emoji" => "📋", "title" => "Daily Grind", "desc" => "For everyday hustle and tasks"],
    ["emoji" => "🏢", "title" => "Office Hustle Board", "desc" => "Organize your 9-to-5"],
    ["emoji" => "🛒", "title" => "Weekly Groove Shopping", "desc" => "Weekly household shopping"],
    ["emoji" => "📚", "title" => "Study Sesh", "desc" => "Plan school or uni tasks"],
    ["emoji" => "💪", "title" => "Fitness Goals", "desc" => "Track workouts & health goals"],
];

view('index.view.php', [
    'tasks' => $tasks,
    'title' => $title,
    'currentDate' => $currentDate
]);

