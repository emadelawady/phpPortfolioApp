<?php 
declare(strict_types=1);

namespace Core\DTO;

use Core\Validation\Rules\Required;

readonly class UserRegistration
{

    public function __construct(
        #[Required] public string $username,
        #[Required] public string $email,
    )
    {

    }
}