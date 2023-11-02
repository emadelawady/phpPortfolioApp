<?php 

namespace App\Http\Controllers\Admins;
use App\Models\User;
use Core\Blade;
use Core\View;
 
class AdminPanelController {

    public function index(): View {

        $users = User::all();

        // dd($GLOBALS);

        return View::blade('admins.admin');

    }


    public function ajax($params)
    {
        dd($params);
    }

    public function faqs($params)
    {

        // dd($GLOBALS['router']);
        dd($params);
    }
}