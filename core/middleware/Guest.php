<?php 

namespace Core\middleware;

use Core\Session;

class Guest{
    public function handle(){
        if (Session::has('name')){
            location("/to-do-list/");
        }
    }
}