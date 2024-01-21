<?php 

namespace App\Http\Controllers\Backend\Pages\Portfoliopage;

use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;
use App\Models\Portfolio;
use App\Models\User;

class PortfolioController
{

    public function index(): View
    {
        $auth = new Auth();

        $portfolios = Portfolio::all();

        // Helper::in_route('admin.portfolio.index');


        return View::view('backend.pages.portfoliopage.portfolio')->with('portfolios', $portfolios);
    }

    public function create()
    {

        // dd($_SESSION);


        return View::blade('backend.pages.portfoliopage.components.create');
    }

    public function store()
    {

        // dd(get_public_path());


        $random = bin2hex(random_bytes(5));

        $file = basename($_FILES["featured_image"]["name"]);

        $database_image = str_replace(" ","_{$random}_", $file);


        // Set image placement folder
        $target_dir = get_public_path();

        // Get file path
        $target_file = get_public_path() . 'assets/images/portfolio/' . $database_image;

        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("jpg", "jpeg", "png");



        // dd($_FILES);

        if(isset($_FILES["featured_image"])){
            move_uploaded_file($_FILES["featured_image"]["tmp_name"], $target_file);
        }

        $auth = new Auth();

        $user_id = User::where('email', '=', $auth->user()->email)->first();


            $Portfolio = Portfolio::create([
                'name' => $_POST['name'],
                'built_with' => $_POST['built_with'],
                'link' => $_POST['link'],
                'description' => $_POST['description'],
                'featured_image' => $database_image,
                'user_id' => $user_id->id,
            ]);

   
        
        Session::put('message_with_data',"Saved Successfully!");
        Session::put('toast',"Success! Fire");

        Session::put('last_added_is', $Portfolio->id);
        
  

        return Helper::redirect()->to('admin.portfolio.create');


    }

    public function show($id)
    {

        // dd($id);

        $portfolio = Portfolio::where('id', '=', $id)->first();

        return View::view('backend.pages.portfoliopage.components.show')->with('portfolio', $portfolio);
    }

    public function edit($id)
    {

        $portfolio = Portfolio::where('id', '=', $id)->first();

        return View::view('backend.pages.portfoliopage.components.edit')->with('portfolio', $portfolio);

    }

    public function update($id)
    {

        // dd($params);

        $portfolio = Portfolio::where('id', '=', $id)->first();
    
        $update_portfolio = Portfolio::find($portfolio->id);

        $update_portfolio->name = $_POST['name'];
        $update_portfolio->built_with = $_POST['built_with'];
        $update_portfolio->link = $_POST['link'];
        $update_portfolio->description = $_POST['description'];

         $update_portfolio->save();

         
        Session::put('message','Saved Successfully');
        

         return Helper::redirect()->to('admin.portfolio.edit',['id' => $id]);

    }

    public function delete($id)
    {

        $portfolio = Portfolio::find($id);
        $portfolio->delete();


        Session::put('message_with_data',"Deleted Successfully!");


        return Helper::redirect()->to('admin.portfolio.index');

    }

    
}