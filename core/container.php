<?php 

namespace Core;

class container{

    protected $bindings = [];

    public function add($key,$func){
        $this->bindings[$key] = $func;
    }

    public function get($key){
        if(array_key_exists($key,$this->bindings)){
            $resolve = $this->bindings[$key];
        
            return call_user_func($resolve);
        }
        throw new \Exception("No binding found for key: ".$key);
    }

}