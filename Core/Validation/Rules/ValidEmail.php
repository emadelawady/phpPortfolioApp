<?php declare(strict_types=1);

namespace Core\Validation\Rules;

use Attribute;
use Core\Validation\Validators\MaxCharactersValidator;
use Core\Validation\Validators\MinCharactersValidator;
use Core\Validation\Validators\RequiredValidator;
use Core\Validation\Validators\ValidatorInterface;
use Core\Validation\Validators\ValidEmailValidator;
use Core\Validation\Enums\EnumRules;


#[Attribute]
class ValidEmail implements ValidationRuleInterface
{
    public function __construct(
        public string $rule = 'Valid Email',
        public mixed $message = EnumRules::Email->value,
        ) {}

    public function getValidator(): ValidatorInterface
    {
        return new ValidEmailValidator();
    }
}