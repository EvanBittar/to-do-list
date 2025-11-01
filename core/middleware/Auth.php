<?php 

namespace Core\middleware;

class Auth{
    public function handle(){
        if (! $_SESSION['name'] ?? false){
            location("/to-do-list/");
        }
    }

}