<?php

namespace Core;

use Core\middleware\Middleware;

class Router{
    public $routre = [];

    private function add($uri,$controller,$method){
        $this->routre[]=[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>$method,
            'middleware'=>null 
        ];
        return $this;
    }
    public function get($uri,$controller){
        return  $this->add($uri,$controller,'GET');
    }
    public function post($uri,$controller){
        return  $this->add($uri,$controller,'POST');
    }
    public function delete($uri,$controller){
        return  $this->add($uri,$controller,'DELETE');
    }
    public function create($uri,$controller){
        return  $this->add($uri,$controller,'CREATE');
    }
    public function done($uri,$controller){
        return  $this->add($uri,$controller,'DONE');
    }

    public function route($uri,$method){                                  
        foreach ($this->routre as $route) {
            if($route['uri'] == $uri && $route['method']==strtoupper($method)){
                Middleware::resolve($route['middleware']);
                return require base_path('Http/controller/'.$route['controller']);
            }
        }
            $this->abort();
    }
    public function only($key){
        $this->routre[array_key_last(($this->routre))]['middleware'] = $key;
        return$this; 
    }
    public function previosURL(){
        return $_SERVER['HTTP_REFERER'];
    }

    protected function abort($code=404){
        http_response_code(404);
        
        require base_path("view/{$code}.php");
        
        die();
    }

}

