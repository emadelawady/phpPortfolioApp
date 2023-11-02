<?php 

namespace App\Http\Controllers\Pages;
use App\Models\User;
use Core\View;
 
class ServicesController {

    public static function index(): View
    {

        // dd($GLOBALS);

        return View::blade('pages.services');

    }
}