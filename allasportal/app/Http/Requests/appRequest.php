<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|string",
            "sex" => "required|string",
            "email" => "required|email",
            "birthplace" => "required|string",
            "birthdate" => "required|date",
        ];
    }
}
