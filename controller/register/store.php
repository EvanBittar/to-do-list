<?php

use Core\Valude;
use Core\Session;
use Core\Database;

$config = require base_path('config.php');
$db = new Database($config);

$error=[];

if(!Valude::email($_POST['email'])){
    $error ['email'] = 'give real email';
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
    'email'=>$_POST['email'],
])->FindOrFalse();

if($result){
    Session::set('name','evan');
    location("/to-do-list/");
}else{
    $db->query("INSERT INTO user (email,`password`) VALUES (:email,:pass)",[
        'email'=>$_POST['email'],
        'pass'=>password_hash($_POST['password'], PASSWORD_BCRYPT),
    ]);
    Session::set('name','evan');
    location("/to-do-list/");
}