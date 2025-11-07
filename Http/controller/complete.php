<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

// Get the task ID and completion status from the POST data
$id = $_POST['id'] ?? null;
$completed = $_POST['completed'] ?? 0;

if ($id) {
    // Update the task's completion status
    $db->query("UPDATE tasks SET completed = :completed WHERE id = :id", [
        'completed' => (int)$completed,
        'id' => $id
    ]);
}

// Redirect back to the previous page
$referer = $_SERVER['HTTP_REFERER'] ?? '/to-do-list';
location($referer);