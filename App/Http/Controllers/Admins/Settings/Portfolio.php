<?php

namespace App\Http\Controllers\Admins\Settings;

use App\Models\User;
use Core\Auth;
use Core\View;

class Portfolio {
    public function index() : View
    {
        $auth = new Auth();

        $user = User::where('email', '=', $auth->user()->email)->first();

        return View::view('admins.settings.portfolio',['user' => $user]);
    }
}