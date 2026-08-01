<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:100',
            'description' => 'required|min:5',
            'amount' => 'required|integer|min:1',
            'price' => 'required|numeric|min:1'
        ];
    }
}
