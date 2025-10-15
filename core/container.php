<?php 

namespace Core;

class container{

    protected $bindings = [];

    public function add($key,$func){
        $this->bindings[$key] = $func;
    }

    public function get($key){
        if(!array_key_exists($key,$this->bindings)){
            // dd($key);
            throw new \Exception("No binding found for key: ".$key);
        }
        $resolve = $this->bindings[$key];
            
        return call_user_func($resolve);
    }

}