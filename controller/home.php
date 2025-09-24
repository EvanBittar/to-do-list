<?php
$config = require base_path( 'config.php');
$db = new Database($config);

$tasks = $db->query("SELECT * FROM task")->fetchAll();



view('index.view.php',[
    'tasks'=>$tasks
]);

