<?php 

use Core\App;
use Core\Database;

$db = App::get(Database::class);

$db->query("DELETE FROM task WHERE (id = :id);",[
    'id'=>$_POST['id'],
]);

location("/to-do-list/");