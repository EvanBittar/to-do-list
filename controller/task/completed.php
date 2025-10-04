<?php

$config = require base_path('config.php');
$db = new Database($config);

if($_POST['answer'] == 'YES'){
    $task = $db->query("UPDATE `task` SET `active` = 1 WHERE `id` = :id;",[
    'id'=>$_GET['id'],
    ])->FindOrFalse();
}

location("/to-do-list/");