<?php

namespace App\Http\Controllers\Components\Globals\Admins;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class DropdownUser extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        $session = (object) Session::get('user');
        

        $user = User::where('email', $session->email)->first();

        // dd($_SESSION);

        return View::make('components.globals.admins.dropdown-user', ['user' =>  $user]);

    }
}
