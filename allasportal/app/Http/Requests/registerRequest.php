<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'age' => 'required|integer|min:18',
            'sex' => 'required|in:male,female,other',
            'password' => 'required|min:6|confirmed',
        ];
    }
}
