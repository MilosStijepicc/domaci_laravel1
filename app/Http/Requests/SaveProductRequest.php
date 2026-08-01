<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100|unique:products',
            'description' => 'required|min:5',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1'
        ];
    }
}
