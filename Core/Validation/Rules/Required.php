<?php declare(strict_types=1);

namespace Core\Validation\Rules;

use Attribute;
use Core\Validation\Validators\RequiredValidator;
use Core\Validation\Validators\ValidatorInterface;
use Core\Validation\Enums\EnumRules;


#[Attribute]
class Required implements ValidationRuleInterface
{
    public function __construct(
        public string $rule = 'required',
        public mixed $message = EnumRules::Empty->value,
        ) {}

    public function getValidator(): ValidatorInterface
    {
        return new RequiredValidator();
    }
}