<?php

use Core\Session;


view('login/login.view.php',[
    'error'=>Session::get('errors') ?? [],
]);