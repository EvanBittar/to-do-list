<?php

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$task = $db->query("UPDATE `task` SET `active` = 0 WHERE `id` = :id;",[
'id'=>$_GET['id'],
])->FindOrFalse();


location("/to-do-list/");