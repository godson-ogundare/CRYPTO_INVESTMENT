<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;

class CardFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'holdername' => [
                'required',
                'string',
                'max:50',
            ],
            'cardnum' => [
                'required',
                'string',
                'max:50',
            ],
            'cv' => [
                'required',
                'string',
                'max:50',
            ],
            'exp' => [
                'required',
                'string',
                'max:50',
            ],
            'amount' => [
                'required',
                'string',
                'max:50',
            ],
        ];

        return $rules;
    }
}
