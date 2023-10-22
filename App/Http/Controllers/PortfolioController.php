<?php 

namespace App\Http\Controllers;
use App\Models\User;
use Core\View;
 
class PortfolioController {

    public static function index(){

        // dd($GLOBALS);

        return View::blade('portfolio');

    }
}