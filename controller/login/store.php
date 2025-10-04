<?php 

$email=$_POST['email'];
$password=$_POST['password'];

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
    return view('reg-log/login.view.php',[
    'error'=>$error,
]);
}

$result = $db->query("SELECT * FROM user WHERE email=:email and password=:password;",[
    'email'=>$email,
    'password'=>$password,
])->FindOrFalse();

if($result){
    Session::set('name','evan');
    location("/to-do-list/");
}else{
    $error['password'] = 'worng email or password';
    return view('reg-log/login.view.php',[
    'error'=>$error,
]);
}
