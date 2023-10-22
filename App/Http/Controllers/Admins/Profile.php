<?php 

namespace App\Http\Controllers\Admins;

use Core\Session;
use Core\View;
use App\Models\User;

class Profile
{
    public function index() {

        $user = User::where('email', '=', Auth()->user()->email)->first();

        View::view('admins.profile')->with(['user' => $user]);
        
    }
}