<?php 

namespace App\Http\Controllers\Admins;
use App\Models\User;
use Core\Blade;
use Core\View;
 
class AdminPanelController {

    public static function index(){

        $users = User::all();

        return View::blade('admins.admin');

    }
}