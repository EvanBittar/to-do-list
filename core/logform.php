<?php 

namespace Core;

use Core\Valude;

class logform{
    
    protected $error = [];

    public function validate($email, $password){
        if(!Valude::email($email)){
            $error['email'] = 'give real email';
        }
        if(!Valude::string($password,8,20)){
            $error['password'] = 'the password must be at least 8';
        }
        return empty($error);
    }

    public function getError(){
        return $this->error;
    }
    public function setError($key,$value ){
        $this -> error[$key] = $value;
    }
}