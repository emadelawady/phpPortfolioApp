<?php declare(strict_types=1);

namespace Core\Validation\Rules;

use Attribute;
use Core\Validation\Validators\MaxCharactersValidator;
use Core\Validation\Validators\RequiredValidator;
use Core\Validation\Validators\ValidatorInterface;
use Core\Validation\Enums\EnumRules;


#[Attribute]
class MaxCharacters implements ValidationRuleInterface
{
    public function __construct(
        public $max,
        public string $rule = 'Max',
        public mixed $message = EnumRules::Max->value,
        ) {}

    public function getValidator(): ValidatorInterface
    {
        return new MaxCharactersValidator($this->max);
    }
}