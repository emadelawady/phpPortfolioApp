<?php declare(strict_types=1);

namespace Core\Validation\Validators;

use Core\Validation\Enums\EnumRules;

class ValidEmailValidator implements ValidatorInterface
{
    public function __construct(
        public string $rule = 'Valid Email',
        public mixed $message = EnumRules::Email->value,
        ) {}

    public function validate($value): bool
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

}