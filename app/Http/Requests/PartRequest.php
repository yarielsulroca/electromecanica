<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartRequest extends FormRequest
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
			'categorie' => 'string',
			'code' => 'string',
			'mark' => 'string',
			'price' => 'required|string',
			'features' => 'string',
			'provider' => 'string',
			'quantity' => 'required|string',
			'saleprice' => 'required',
			'typepurchase' => 'required|string',
			'budjet_id' => 'required',
        ];
    }
}
