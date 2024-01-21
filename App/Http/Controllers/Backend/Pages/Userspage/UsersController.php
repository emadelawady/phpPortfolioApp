<?php 

namespace App\Http\Controllers\Backend\Pages\Userspage;

use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;

class UsersController
{

    public function index(): View
    {
        $auth = new Auth();

        $users = User::all();

        // Helper::in_route('admin.portfolio.index');


        return View::view('backend.pages.userspage.users')->with('users', $users);
    }

    public function create(): View
    {

        // dd($_SESSION);


        return View::blade('backend.pages.userspage.components.create');
    }

    public function store()
    {

        // dd(get_public_path());


        $random = bin2hex(random_bytes(5));

        $file = basename($_FILES["profile_image"]["name"]);

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

        if(isset($_FILES["profile_image"])){
            move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file);
        }



            $user = User::create([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'profile_image' => $database_image,
            ]);

   
        
        Session::put('message_with_data',"Saved Successfully!");

        Session::put('last_added_is', $user->id);
        
  

        return Helper::redirect()->to('admin.user.create');


    }

    public function show($id)
    {

        $user = User::where('id', '=', $id)->first();

        return View::view('backend.pages.userspage.components.show')->with('user', $user);
    }

    public function edit($id)
    {

        $user = User::where('id', '=', $id)->first();

        return View::view('backend.pages.userspage.components.edit')->with('user', $user);

    }

    public function update($id)
    {

        // dd($id);

        $user = User::where('id', '=', $id)->first();
    
        $update_user = Testimonial::find($user->id);

        $update_user->name = $_POST['name'];
        $update_user->email = $_POST['email'];
        $update_user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

         $update_user->save();

         
        Session::put('message','Saved Successfully');
        

        return Helper::redirect()->to('admin.user.edit',['id' => $id]);

    }

    public function delete($id)
    {

        $service = User::find($id);
        $service->delete();


        Session::put('message_with_data',"Deleted Successfully!");


        return Helper::redirect()->to('admin.users.index');

    }

    
}