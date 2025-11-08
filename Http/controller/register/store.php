<?php

use Core\App;
use Core\Valude;
use Core\Session;
use Core\Database;

$db = App::get(Database::class);

$error=[];
if(!Valude::string($_POST['name'],3,255)){
    $error ['name'] = 'Please enter a valid name';
}

if(!Valude::email($_POST['email'])){
    $error ['email'] = 'Please enter a valid email address (e.g., yourname@example.com)';
}

if(!Valude::string($_POST['password'],8,20)){
    $error['password'] = 'the password must be at least 8';
}
if (!check($_POST['password'],$_POST['password_confirmation'])){
    $error['confirm_password'] = "the password don't match";
}
if(count($error)){
    return view('register/register.view.php',[
    'error'=>$error,
]);
}

$result = $db->query("SELECT * FROM users WHERE email=:email",[
    'email'=>$_POST['email'],
])->FindOrFalse();

if($result){
    Session::set('message', 'An account with this email already exists. Please log in.');
    location("/to-do-list/login");
}else{
    $db->query("INSERT INTO users (email,`password`, `name`) VALUES (:email, :pass, :name)",[
        'email' => $_POST['email'],
        'pass' => password_hash($_POST['password'], PASSWORD_BCRYPT),
        'name' => $_POST['name']
    ]);
}

Session::set('name',$_POST['name']);
location("/to-do-list/");
