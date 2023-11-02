<?php 


namespace App\Http\Controllers\Admins\Settings;

use App\Models\User;
use Core\View;
use Core\Auth;


class About {

    public function index(): View {

        $auth = new Auth();

        $user = User::where('email', '=', $auth->user()->email)->first();
        
        return View::view('admins.settings.about', ['user' => $user]);
    }
}