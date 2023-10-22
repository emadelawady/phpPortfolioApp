<?php 

namespace App\Http\Forms;
use Core\Validator;


class RegisterForm {
    protected $errors;

    public function validate($name,$email, $password){

        if(!Validator::string($name, 5,255)){

            $this->errors['name'] = 'please enter a valid name at least 5 characters';

        }
        if(!Validator::email($email)){

            $this->errors['email'] = 'please enter a valid email address';

        }

        if(!Validator::string($password, 7,255)){

            $this->errors['password'] = 'please enter a valid password at least 7 characters';

        }

        return empty($this->errors);

    }

    public function errors()
    {
        return $this->errors;
    }
}