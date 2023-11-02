<?php 

namespace App\Http\Controllers\Admins;

use Core\View;
use App\Models\User;
use Core\Auth;
class Profile
{
    public function index(): View {
        
        $auth = new Auth();

        $user = User::where('email', '=', $auth->user()->email)->first();

        return View::view('admins.profile')->with('user', $user);
        
    }
}