<?php 

namespace Http\form;

use Core\ValidationException;
use Core\Valude;

class logform{
    protected $error = [];

    public function __construct(public array $attributes)
    {
        if(!Valude::email($attributes['email'])){
            $this->error['email'] = 'give real email';
        }
        if(!Valude::string($attributes['password'],8,20)){
            $this->error['password'] = 'the password must be at least 8';
        }
        
    }

    public static function validate($attributes){
        $instance = new static($attributes);
        return $instance->failed() ? $instance->throw() : $instance;
    }
    public function throw(){
        ValidationException::throw($this->getError(), $this->attributes);
    }
    public function failed(){
        return count(($this->error));
    }

    public function getError(){
        return $this->error;
    }
    public function setError($key,$value ){
        $this -> error[$key] = $value;
        return $this;
    }
}