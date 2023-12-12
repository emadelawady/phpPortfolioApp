<?php declare(strict_types=1);

namespace Core\Validation\Rules;

use Core\Validation\Validators\ValidatorInterface;

interface ValidationRuleInterface
{
    public function getValidator() : ValidatorInterface;
}