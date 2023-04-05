<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAmenityRequest extends FormRequest
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
            //
        ];
    }
}
