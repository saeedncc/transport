<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DriverRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:20'],
            'license_number' => ['required', 'string', 'max:20', Rule::unique('drivers','license_number')],
            'phone_number' => ['required', 'string', 'max:20', Rule::unique('drivers','phone_number')],
        ];
    }

}
