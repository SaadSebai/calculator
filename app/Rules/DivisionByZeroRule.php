<?php

namespace App\Rules;

use App\Enums\Operations;
use Illuminate\Contracts\Validation\Rule;

class DivisionByZeroRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(private string|null $operator)
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !($this->operator === Operations::Division->value && $value == 0);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Can not divide by zero.';
    }
}
