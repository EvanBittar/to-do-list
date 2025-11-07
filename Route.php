<?php

$routre->get('/to-do-list/','home.php');

$routre->post('/to-do-list/','add.php');

$routre->put('/to-do-list/','add_task.php');

$routre->get('/to-do-list/edit','edit.php');

$routre->post('/to-do-list/update','update.php');

$routre->post('/to-do-list/complete','complete.php');

$routre->delete('/to-do-list/delete','delete.php');


// Authentication Routes
$routre->get('/to-do-list/register', 'register/create.php')->only('guest');
$routre->post('/to-do-list/register', 'register/store.php');

$routre->get('/to-do-list/login', 'login/create.php');
$routre->post('/to-do-list/login', 'login/store.php');
$routre->post('/to-do-list/logout', 'login/destroy.php');
