<?php

use Core\Authenticator;
use Core\logform;
use Core\Session;

$email=$_POST['email'];
$password=$_POST['password'];


$valude = new logform();

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
