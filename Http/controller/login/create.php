<?php

use Core\Session;


view('reg-log/login.view.php',[
    'error'=>Session::get('errors') ?? [],
]);