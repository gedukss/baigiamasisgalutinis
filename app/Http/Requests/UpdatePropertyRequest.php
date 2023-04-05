<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyRequest extends FormRequest
{
    /**
     
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'location' => 'required|max:255',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'year' => 'required|numeric|max_digits:4',
        ];
    }
}
