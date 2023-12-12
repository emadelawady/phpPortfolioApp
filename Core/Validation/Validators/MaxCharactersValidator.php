<?php declare(strict_types=1);

namespace Core\Validation\Validators;

use Core\Validation\Enums\EnumRules;


class MaxCharactersValidator implements ValidatorInterface
{
    public function __construct(
        public $max,
        public string $rule = 'Max',
        public mixed $message = EnumRules::Max->value,
        ) {}

    public function validate($value): bool
    {
        $value = trim($value);

        return strlen($value) <= $this->max;
     
    }


}