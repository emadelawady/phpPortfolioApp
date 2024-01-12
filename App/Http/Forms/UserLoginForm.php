<?php declare(strict_types=1);

namespace App\Http\Forms;

use Core\Validation\Rules\MatchPassword;
use Core\Validation\Rules\MaxCharacters;
use Core\Validation\Rules\MinCharacters;
use Core\Validation\Rules\Required;
use Core\Validation\Rules\UserAlreadyExists;
use Core\Validation\Rules\ValidEmail;


readonly class UserLoginForm
{
    // public array $errs;
    // public function __construct(
    //     #[Required, ValidEmail]
    //     public string $email,
    //     #[Required]
    //     public string $password,
    // ){}
    public function __construct(
        #[ValidEmail, Required, MaxCharacters(max: 20), MinCharacters(min:1)]
        public string $email,
        #[Required, MaxCharacters(max: 20), MinCharacters(min:1)]
        public string $password,
    ){

    }

}