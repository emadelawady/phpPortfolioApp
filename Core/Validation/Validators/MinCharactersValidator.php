<?php declare(strict_types=1);

namespace Core\Validation\Validators;
use Core\Validation\Enums\EnumRules;


class MinCharactersValidator implements ValidatorInterface
{
    public function __construct(
        public $min,
        public $fieldName = '',
        public string $rule = 'Min',
        public mixed $message = EnumRules::Min->value,
        ) {}

    public function validate($value): bool
    {

        $value = trim($value);
        $valueToINT = intval($value);

        // dd($value);

        // dd($this->min === strlen($value));

        // dd(gettype($this->min), gettype($value));


        return strlen($value) >= $this->min;
     
    }


}