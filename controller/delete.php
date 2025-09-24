<?php 

require base_path('core/Valude.php');
$config = require base_path('config.php');
$db = new Database($config);

$db->query("DELETE FROM task WHERE (id = :id);",[
    'id'=>$_POST['id'],
]);

header("location: /to-do-list/");
exit;