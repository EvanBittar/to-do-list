<?php
// return  [
//     '/'=>'controller/home.php',
//     '/active'=>'controller/active.php',
//     '/complete'=>'controller/complete.php'
// ];

$routre->get('/to-do-list/','controller/home.php');
$routre->get('/to-do-list/active','controller/active.php');
$routre->get('/to-do-list/complete','controller/complete.php');

$routre->post('/to-do-list/','controller/add.php');

$routre->get('/to-do-list/UnDone','controller/UnDone.php');

$routre->get('/to-do-list/Done','controller/Done.php');
$routre->done('/to-do-list/Done','controller/completed.php');

$routre->delete('/to-do-list/','controller/delete.php');

$routre->get('/to-do-list/register','controller/register/create.php');
$routre->post('/to-do-list/register','controller/register/store.php');