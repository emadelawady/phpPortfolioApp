<?php declare(strict_types=1);

namespace Core\Validation\Validators;

use Core\Validation\Enums\EnumRules;


class RequiredValidator implements ValidatorInterface
{
    public function __construct(
        public string $rule = 'required',
        public mixed $message = EnumRules::Empty->value,
        ) {}

    public function validate($value): bool
    {
        return !empty($value);
    }
}