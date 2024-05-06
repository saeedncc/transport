<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use App\Enums\MonitorEnum;

class MonitorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', Rule::unique('monitors','name')],
            'url' => ['required', 'url', 'max:255'],
            'interval' => ['required', 'integer'],
            'method_request' => ['nullable','string',Rule::enum(MonitorEnum::class)],
            'body' => ['nullable', 'array'],
        ];
    }
	
	
	
	public function prepareForValidation()
    {
        $this->merge([
			'method_request' => strtolower(trim($this->method_request)),
        ]);
    }
}
