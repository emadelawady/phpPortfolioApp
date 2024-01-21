<?php 

namespace App\Http\Controllers\Backend\Pages\Testimonialspage;

use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;
class TestimonialsController
{

    public function index(): View
    {
        $auth = new Auth();

        $testimonials = Testimonial::all();

        // Helper::in_route('admin.portfolio.index');


        return View::view('backend.pages.testimonialspage.testimonials')->with('testimonials', $testimonials);
    }

    public function create()
    {

        // dd($_SESSION);


        return View::blade('backend.pages.testimonialspage.components.create');
    }

    public function store()
    {


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



            $testimonial = Testimonial::create([
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'rate' => $_POST['rate'],
                'featured_image' => $database_image,
                'user_id' => $user_id->id,
            ]);

   
        
        Session::put('message_with_data',"Saved Successfully!");

        Session::put('last_added_is', $testimonial->id);
        
  

        return Helper::redirect()->to('admin.testimonial.create');


    }

    public function show($id)
    {

        $testimonial = Testimonial::where('id', '=', $id)->first();

        return View::view('backend.pages.testimonialspage.components.show')->with('testimonial', $testimonial);
    }

    public function edit($id)
    {

        $testimonial = Testimonial::where('id', '=', $id)->first();

        return View::view('backend.pages.testimonialspage.components.edit')->with('testimonial', $testimonial);

    }

    public function update($id)
    {

        // dd($id);

        $testimonial = Testimonial::where('id', '=', $id)->first();
    
        $update_testimonial = Testimonial::find($testimonial->id);

        $update_testimonial->title = $_POST['title'];
        $update_testimonial->content = $_POST['content'];
        $update_testimonial->rate = $_POST['rate'];

         $update_testimonial->save();

         
        Session::put('message','Saved Successfully');
        

        return Helper::redirect()->to('admin.testimonial.edit',['id' => $id]);

    }

    public function delete($id)
    {

        $testimonial = Testimonial::find($id);
        $testimonial->delete();


        Session::put('message_with_data',"Deleted Successfully!");


        return Helper::redirect()->to('admin.testimonials.index');

    }

    
}