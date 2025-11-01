<?php 

namespace Core;

use Core\App;

class Authenticator{

    public function auth($email, $password){
    $user = App::get(\Core\Database::class)->query("SELECT * FROM user WHERE email = :email",[
        'email'=>$email
    ])->FindOrFalse();
    if ($user && password_verify($password, $user['password'])){
        $this->login([
            'email'=>$user['email'],
            'id'=>$user['id']
        ]);
        return true;
    }
    return false;
}
    public function login($user){
    $_SESSION['user'] =[
    'email'=>$user['email'],
    'id'=>$user['id']
    ];
    }
}

