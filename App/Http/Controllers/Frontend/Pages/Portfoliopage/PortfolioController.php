<?php 

namespace App\Http\Controllers\Frontend\Pages\Portfoliopage;

use App\Models\Portfolio;
use App\Models\User;
use Core\View;
 
class PortfolioController {

    public function index(): View
    {
        
        return View::blade('frontend.pages.portfoliopage.portfolio');

    }

    public function show($id): view
    {
        $portfolio = Portfolio::where('id', '=', $id)->first();

        // $_REQUEST['id'] = $id;

        return View::view('frontend.pages.portfoliopage.components.show')->with('portfolio', $portfolio);
    }
}