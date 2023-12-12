<?php


namespace App\Http\Controllers\Admins;

use App\Models\Blog;
use Core\Auth;
use Core\Helper;
use Core\Session;
use Core\View;

class BlogController
{
    public function index(): View
    {
        $auth = new Auth();

        $blogs = Blog::all();

        // Helper::in_route('admin.portfolio.index');


        return View::view('admins.blog.index')->with('blogs', $blogs);
    }

    public function create()
    {

        // dd($_SESSION);


        return View::blade('admins.blog.create');
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



            $blog = Blog::create([
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'rate' => $_POST['rate'],
                'tags' => $_POST['tags'],
                'featured_image' => $database_image,
            ]);

   
        
        Session::put('message_with_data',"Saved Successfully!");

        Session::put('last_added_is', $blog->id);
        
  

        return Helper::redirect()->to('admin.blog.create');


    }

    public function show($id)
    {

        $blog = Blog::where('id', '=', $id)->first();

        return View::view('admins.blog.show')->with('blog', $blog);
    }

    public function edit($id)
    {

        $blog = Blog::where('id', '=', $id)->first();

        return View::view('admins.blog.edit')->with('blog', $blog);

    }

    public function update($id)
    {

        // dd($id);

        $blog = Blog::where('id', '=', $id)->first();
    
        $update_blog = Blog::find($blog->id);

        $update_blog->title = $_POST['title'];
        $update_blog->content = $_POST['content'];
        $update_blog->rate = $_POST['rate'];
        $update_blog->tags = $_POST['tags'];

         $update_blog->save();

         
        Session::put('message','Saved Successfully');
        

        return Helper::redirect()->to('admin.blog.edit',['id' => $id]);

    }

    public function delete($id)
    {

        $blog = Blog::find($id);
        $blog->delete();


        Session::put('message_with_data',"Deleted Successfully!");


        return Helper::redirect()->to('admin.blog.index');

    }
}