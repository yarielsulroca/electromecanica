<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarantyRequest extends FormRequest
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
			'description_items' => 'required|string',
			'client_id' => 'required',
			'derechos' => 'required|string',
			'date_end' => 'required',
			'vias_reclamacion' => 'string',
			'worder_id' => 'required',
        ];
    }
}
