<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

if($_POST['answer'] == 'YES'){
    $task = $db->query("UPDATE `task` SET `active` = 1 WHERE `id` = :id;",[
    'id'=>$_GET['id'],
    ])->FindOrFalse();
}

location("/to-do-list/");