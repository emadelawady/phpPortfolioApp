<?php 

namespace App\Http\Controllers\Backend\Pages\Profilepage;

use Core\View;
use App\Models\User;
use Core\Auth;
class Profile
{
    public function index(): View {
        
        $auth = new Auth();

        $user = User::where('email', '=', $auth->user()->email)->first();

        return View::view('backend.pages.profilepage.profile')->with('user', $user);
        
    }
}