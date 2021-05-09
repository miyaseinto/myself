<?php
namespace App\Http\Validators;

use Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}
