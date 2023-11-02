<?php 

namespace App\Http\Controllers\Auth;

use App\Http\Forms\RegisterForm;
use App\Models\User;
use Core\Helper;
use Core\View;

class Register {
    protected string $name,$email,$password;
    public function index(): View
    {
        return View::blade('auth.register');
    }

    public function store(): View|Helper
    {

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];

        // dd($_POST);

        //validate

        $form = new RegisterForm();

        if(!$form->validate($this->name,$this->email,$this->password)){

            return View::view('auth.register', ['errors' => $form->errors()]);

        }


        $user = User::where('email', '=', $this->email)->exists();

        // dd($user);

        if($user) {

            $errors['already_exists'] = 'this account is already exists, ';
            return View::view('auth.register', ['errors' => $errors]);
        } else{

            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => password_hash($this->password, PASSWORD_DEFAULT)
            ]);

            $_SESSION['user'] = [
                'name' => $this->name,
                'email' => $this->email
            ];

            return Helper::redirect()->to('homepage');
            // return heade/r("location: /") . exit();
        }

        // dd($user);


        
    }
}