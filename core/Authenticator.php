<?php 

namespace Core;

use core\Database;

$config = require base_path('config.php');

class Authenticator{

    public $db = new Database($config);

    public function auth($email, $password){
    $user = $this->db->query("SELECT * FROM users WHERE email = :email",[
    'email'=>$email
    ])->findOrFales();
    if ($user && password_verify($password, $user['password'])){
        $this->login([
            'email'=>$user['email'],
            'id'=>$user['id']
        ]);
    }
}
    public function login($user){
    $_SESSION['user'] =[
    'email'=>$user['email'],
    'id'=>$user['id']
    ];
    }
}