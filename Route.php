<?php
$routre->get('/to-do-list/','controller/task/home.php');
$routre->post('/to-do-list/','controller/task/add.php');
$routre->delete('/to-do-list/','controller/login/delete.php');

$routre->get('/to-do-list/edit','controller/task/edit.php');
$routre->post('/to-do-list/edit','controller/task/change.php');
$routre->delete('/to-do-list/edit','controller/task/delete.php');

$routre->get('/to-do-list/active','controller/active.php');

$routre->get('/to-do-list/complete','controller/complete.php')->only('auth');

$routre->get('/to-do-list/UnDone','controller/UnDone.php');
$routre->get('/to-do-list/Done','controller/Done.php');
$routre->done('/to-do-list/Done','controller/task/completed.php');


$routre->get('/to-do-list/register','controller/register/create.php')->only('guest');
$routre->post('/to-do-list/register','controller/register/store.php');

$routre->get('/to-do-list/login','controller/login/create.php');
$routre->post('/to-do-list/login','controller/login/store.php');
