<?php 

namespace Core\middleware;

use Core\Session;

class Auth{
    public function handle(){
        if (! (Session::has('name') ?? false)){
            location("/to-do-list/login");
            exit();
        }
    }

}