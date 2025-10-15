<?php

use Core\Authenticator;
use Core\logform;
use Core\Session;
use Core\Database;

$email=$_POST['email'];
$password=$_POST['password'];

$config = require base_path('config.php');
$db = new Database($config);
$valude = new logform();

dd($valude->validate($email,$password));

if ($valude->validate($email,$password)){
    if((new Authenticator)->auth($email,$password)){
        (new Session)->set('name','evan');
        location('/to-do-list/');
    }
}else{
    $valude->setError('password','password or email worng');
    return view('reg-log/login.view.php',[
        'error'=>$valude->getError(),
    ]);
}

// $result = $db->query("SELECT * FROM user WHERE email=:email and `password`=:pass;",[
//     'email'=>$email,
//     'pass'=>$password,
//     ])->FindOrFalse();
    
//     if($result){
//     
//     location("/to-do-list/");
// }else{
//     $error['password'] = 'worng email or password';
//     return view('reg-log/login.view.php',[
//         'error'=>$error,
// ]);
// }
