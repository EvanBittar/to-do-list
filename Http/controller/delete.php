<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

// Get the task ID from the POST data
$id = $_POST['id'] ?? null;

if ($id) {
    // Delete the task
    $db->query("DELETE FROM tasks WHERE id = :id", [
        'id' => $id
    ]);
}

// Redirect back to the previous page
$referer = $_SERVER['HTTP_REFERER'] ?? '/to-do-list';
location($referer);
