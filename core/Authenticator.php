<?php 

namespace Core;

use Core\App;

class Authenticator{

    public function auth($email, $password){
    $user = App::get(\Core\Database::class)->query("SELECT * FROM users WHERE email = :email",[
        'email'=>$email
    ])->FindOrFalse();

    if ($user && password_verify($password, $user['password'])){
        $this->login([
            'name'=>$user['name'],
            'id'=>$user['id']
        ]);
        return true;
    }
    return false;
}
    public function login($user){
    Session::set('name',$user['name']);
    Session::set('id',$user['id']);
    }
}

