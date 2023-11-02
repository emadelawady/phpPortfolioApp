<?php 

namespace App\Http\Controllers\Pages;
use App\Models\User;
use Core\View;
 
class PortfolioController {

    public function index(): View
    {

        // dd($GLOBALS);

        return View::blade('pages.portfolio');

    }
}