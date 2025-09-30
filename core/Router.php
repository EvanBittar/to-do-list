<?php

class Router{
    public $routre = [];

    private function add($uri,$controller,$method){
        $this->routre[]=[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>$method
        ];
    }
    public function get($uri,$controller){
        $this->add($uri,$controller,'GET');
    }
    public function post($uri,$controller){
        $this->add($uri,$controller,'POST');
    }
    public function delete($uri,$controller){
        $this->add($uri,$controller,'DELETE');
    }
    public function create($uri,$controller){
        $this->add($uri,$controller,'CREATE');
    }
    public function done($uri,$controller){
        $this->add($uri,$controller,'DONE');
    }

    public function route($uri,$method){                                  
        foreach ($this->routre as $route) {
            if($route['uri'] == $uri && $route['method']==strtoupper($method)){
                return require base_path($route['controller']);
            }
        }
        dd($method);
            $this->abort();
    }

    protected function abort($code=404){
        http_response_code(404);
        
        require base_path("view/{$code}.php");
        
        die();
    }

}



// function route($routre){
//     if (array_key_exists($_SERVER['REQUEST_URI'], $routre)) {
//         return require $routre[$_SERVER['REQUEST_URI']];
//     } else {
//         http_response_code(404);
//         echo '404 Not Found';
//     }
// }
