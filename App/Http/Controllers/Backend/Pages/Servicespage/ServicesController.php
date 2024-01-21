<?php 

namespace App\Http\Controllers\Backend\Pages\Servicespage;

use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\User;

class ServicesController
{

    public function index(): View
    {
        $auth = new Auth();

        $services = Service::all();

        // Helper::in_route('admin.portfolio.index');


        return View::view('backend.pages.servicespage.services')->with('services', $services);
    }

    public function create()
    {

        // dd($_SESSION);


        return View::blade('backend.pages.servicespage.components.create');
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


            $service = Service::create([
                'name' => $_POST['name'],
                'skills' => $_POST['skills'],
                'link' => $_POST['link'],
                'description' => $_POST['description'],
                'featured_image' => $database_image,
                'user_id' => $user_id->id,
            ]);

   
        
        Session::put('message_with_data',"Saved Successfully!");

        Session::put('last_added_is', $service->id);
        
  

        return Helper::redirect()->to('admin.service.create');


    }

    public function show($id)
    {

        $service = Service::where('id', '=', $id)->first();

        return View::view('backend.pages.servicespage.components.show')->with('service', $service);
    }

    public function edit($id)
    {

        $service = Service::where('id', '=', $id)->first();

        return View::view('backend.pages.servicespage.components.edit')->with('service', $service);

    }

    public function update($id)
    {

        // dd($id);

        $service = Service::where('id', '=', $id)->first();
    
        $update_service = Service::find($service->id);

        $update_service->name = $_POST['name'];
        $update_service->skills = $_POST['skills'];
        $update_service->link = $_POST['link'];
        $update_service->description = $_POST['description'];

         $update_service->save();

         
        Session::put('message','Saved Successfully');
        

         return Helper::redirect()->to('admin.service.edit',['id' => $id]);

    }

    public function delete($id)
    {

        $service = Service::find($id);
        $service->delete();


        Session::put('message_with_data',"Deleted Successfully!");


        return Helper::redirect()->to('admin.services.index');

    }

    
}