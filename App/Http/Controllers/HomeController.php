<?php 

namespace App\Http\Controllers;
use App\Models\User;
use Core\View;
 
class HomeController {

    public function index(){

        // dd($GLOBALS);

        return View::blade('home');

    }
}