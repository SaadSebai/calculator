<?php

namespace App\Http\Requests;

use App\Enums\Operations;
use App\Rules\DivisionByZeroRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_argument'     => ['required', 'numeric'],
            'operator'           => ['required', 'string', new Enum(Operations::class)],
            'second_argument'    => ['required', 'numeric', new DivisionByZeroRule($this->operator)]
        ];
    }
}
