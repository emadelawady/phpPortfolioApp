<?php 

namespace App\Http\Controllers\Admins;

use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;
use App\Models\Portfolio;

class PortfolioController
{

    public function index(): View
    {
        $auth = new Auth();

        $portfolios = Portfolio::all();

        // Helper::in_route('admin.portfolio.index');


        return View::view('admins.portfolio.index')->with('portfolios', $portfolios);
    }

    public function create()
    {

        // dd($_SESSION);


        return View::blade('admins.portfolio.create');
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



            $Portfolio = Portfolio::create([
                'name' => $_POST['name'],
                'skills' => $_POST['skills'],
                'link' => $_POST['link'],
                'description' => $_POST['description'],
                'featured_image' => $database_image,
            ]);

   
        
        Session::put('message_with_data',"Saved Successfully!");

        Session::put('last_added_is', $Portfolio->id);
        
  

        return Helper::redirect()->to('admin.portfolio.create');


    }

    public function show($id)
    {

        $portfolio = Portfolio::where('id', '=', $id)->first();

        return View::view('admins.portfolio.show')->with('portfolio', $portfolio);
    }

    public function edit($id)
    {

        $portfolio = Portfolio::where('id', '=', $id)->first();

        return View::view('admins.portfolio.edit')->with('portfolio', $portfolio);

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