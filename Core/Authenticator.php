<?php declare(strict_types=1);

namespace Core;
use App\Models\User;

class Authenticator {

    public function attempt($email,$password)
    {

        $user_exists = User::where('email', '=', $email)->exists();

        // dd($user_exists);


        $user = User::where('email', '=', $email)->first();


        if($user_exists){

            if (password_verify($password, $user->password)) {

                // dd($user->name);

                $this->login([
                    'name' => $user->name,
                    'email' => $email
                ]);
        
                return true;

            }
            
        }

        
        return false;

    }

    public function login($args){

        $_SESSION['user'] = [
            'name' => $args['name'],
            'email' => $args['email']
        ];

        session_regenerate_id(true);

    }

    public function logout(){
        
        Session::destroy();

        // return header("location: /") . exit();
        return Helper::redirect()->to('homepage');
    }

}