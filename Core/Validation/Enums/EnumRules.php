<?php declare(strict_types=1);


namespace Core\Validation\Enums;


enum EnumRules : string
{
    case Empty = 'must be filled out';
    case Max = 'is Max Available Characters';
    case Min = 'is Min Available Characters';
    case Email = 'Make Sure to Enter A valid Email Address';
    case AlreadyExists = 'User Already Exist, You Can ';
    case WrongData = 'Email & password didn\'t Match';
}
