<?php

namespace App\Http\Controllers\Auth;

use Core\Authenticator;

class Logout {
    public function logout() : Authenticator
    {

        $auth = new Authenticator();

        return $auth->logout();
    }

}