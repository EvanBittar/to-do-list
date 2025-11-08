<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

// Get the task ID from the POST data
$id = $_POST['id'] ?? null;

if ($id) {
  // First verify the task belongs to the user
  $task = $db->query("SELECT id FROM tasks WHERE id = :id AND user_id = :user_id", [
      'id' => $_POST['id'],
      'user_id' => Core\Session::get('id')
  ])->FindOrFalse();

  if (!$task) {
      http_response_code(403);
      die('Unauthorized');
  }

  // Delete the task
  $db->query("DELETE FROM tasks WHERE id = :id", [
      'id' => $_POST['id']
  ]);
}

// Redirect back to the previous page
$referer = $_SERVER['HTTP_REFERER'] ?? '/to-do-list';
location($referer);
