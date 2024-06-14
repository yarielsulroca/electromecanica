<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeorderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'worder_id' => 'required',
			'problems' => 'required|string',
			'date_init' => 'required',
			'condition' => 'required|string',
        ];
    }
}
