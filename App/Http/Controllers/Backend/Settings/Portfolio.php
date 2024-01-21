<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Models\User;
use Core\Auth;
use Core\View;

class Portfolio {
    public function index() : View
    {
        $auth = new Auth();

        $user = User::where('email', '=', $auth->user()->email)->first();

        return View::view('backend.settings.portfolio',['user' => $user]);
    }
}