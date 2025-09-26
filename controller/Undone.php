<?php

$config = require base_path('config.php');
$db = new Database($config);

$task = $db->query("UPDATE `task` SET `active` = 0 WHERE `id` = :id;",[
'id'=>$_GET['id'],
])->fetch();


header("location: /to-do-list/");
exit;