<?php 

namespace Core\middleware;

class Guest{
    public function handle(){
        if ($_SESSION['name'] ?? false){
            location("/to-do-list/");
        }
    }
}