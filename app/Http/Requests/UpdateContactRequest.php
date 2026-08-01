<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            "email" => "required|email",
            "subject" => "required|string",
            "message" => "required|string|min:5"
        ];
    }
}
