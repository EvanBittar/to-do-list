<?php

use Core\Valuded;
use Core\App;
use Core\database;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

$errore = [];

if (!Valuded::email($email)) {
    $errore['email'] = 'Please enter a valid email address.';
}
if (!Valuded::string($password, 7, 255)) {
    $errore['password'] = 'Password must be at least 7 characters long.';
}

if(count($errore)){
    view('registration/create.view.php', [
        'errore' => $errore,
    ]);
}

$db = App::resolve(database::class);

$result =  $db->query("select * from user where email = :email",[
    'email'=>$email
])->findOrFales();

if ($result){
    dd("yes");
    header("location: /php/");
    die();
}else{
    
    $db->query("INSERT INTO user(email,password) VALUES
    (:email,:password);",[
    'email'=>$email,
    'password'=> password_hash($password, PASSWORD_BCRYPT)
]);

(new Authenticator)->login([
    'email'=>$email,
]);

    header("location: /php/");
    die();
}
