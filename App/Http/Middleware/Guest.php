<?php 

namespace App\Http\Middleware;

use Core\Helper;

class Guest {
    public function handle(){

        if($_SESSION['user'] ?? false){
            
            Helper::redirect()->to('homepage');

        }

    }
}