<?php declare(strict_types=1);

namespace Core\Validation\Validators;

interface ValidatorInterface
{
    public function validate($value);
}