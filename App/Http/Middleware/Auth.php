<?php 

namespace App\Http\Middleware;

use Core\Helper;

class Auth {
    public function handle(){

        if(! isset($_SESSION['user']) ?? false){

            Helper::redirect()->to('homepage');
        }

    }
}