<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VehicleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'plate_number' => ['required', 'string', 'max:20', Rule::unique('vehicles','plate_number')],
            'brand' => ['required', 'string', 'max:20' ],
            'model' => ['required', 'string', 'max:20' ],
            'year' => ['required', 'integer' ],
        ];
    }

}
