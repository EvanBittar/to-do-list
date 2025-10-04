<?php 

session_destroy();
$param = session_get_cookie_params();

setcookie('PHPSESSID', '', time() - 3600, $param['path'], $param['domain'], $param['secure'], $param['httponly']);
location('/to-do-list/');