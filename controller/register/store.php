<?php

require base_path('core/valude.php');

$config = require base_path('config.php');
$db = new Database($config);

$error=[];

if(!Valude::email($_POST['email'])){
    $error ['email'] = 'the email is worng';
}

if(!Valude::string($_POST['password'],8,20)){
    $error['password'] = 'the password must be at least 8';
}

if(count($error)){
    return view('register/register.view.php',[
    'error'=>$error,
]);
}

$result = $db->query("SELECT * FROM user WHERE email=:email",[
    'email'=>$_POST['email']
])->FindOrFalse();

