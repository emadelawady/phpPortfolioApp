<?php declare(strict_types=1);

namespace Core\Validation\Rules;

use Attribute;
use Core\Validation\Validators\MaxCharactersValidator;
use Core\Validation\Validators\MinCharactersValidator;
use Core\Validation\Validators\RequiredValidator;
use Core\Validation\Validators\ValidatorInterface;
use Core\Validation\Enums\EnumRules;


#[Attribute]
class MinCharacters implements ValidationRuleInterface
{
    public function __construct(
        public $min,
        public $fieldName = '',
        public string $rule = 'Min',
        public mixed $message = EnumRules::Min->value,
        ) {}

    public function getValidator(): ValidatorInterface
    {
        return new MinCharactersValidator($this->min);
    }
}