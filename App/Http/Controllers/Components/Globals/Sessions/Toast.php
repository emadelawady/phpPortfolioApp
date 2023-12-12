<?php

namespace App\Http\Controllers\Components\Globals\Sessions;

use App\Models\Setting;
use App\Models\User;
use Closure;
use Core\Session;
// use Core\View;
use Illuminate\Support\Facades\View;


use Illuminate\View\Component;

class Toast extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    
    public function render()
    {

        return View::make('components.globals.sessions.toast');

    }
}
