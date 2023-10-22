<?php

namespace App\Http\Controllers\Auth;

use Core\Authenticator;

class Logout {
    public function logout(){

        $auth = new Authenticator();

        return $auth->logout();
    }

}