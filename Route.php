<?php

$routre->get('/to-do-list/','home.php')->only('auth');

$routre->post('/to-do-list/','add.php')->only('auth');

$routre->put('/to-do-list/','add_task.php')->only('auth');

$routre->get('/to-do-list/edit','edit.php')->only('auth');

$routre->post('/to-do-list/update','update.php')->only('auth');

$routre->post('/to-do-list/complete','complete.php')->only('auth');

$routre->delete('/to-do-list/delete','delete.php')->only('auth');


// Authentication Routes
$routre->get('/to-do-list/register', 'register/create.php')->only('guest');
$routre->post('/to-do-list/register', 'register/store.php')->only('guest');

$routre->get('/to-do-list/login', 'login/create.php')->only('guest');
$routre->post('/to-do-list/login', 'login/store.php')->only('guest');
$routre->post('/to-do-list/logout', 'login/destroy.php')->only('auth');
