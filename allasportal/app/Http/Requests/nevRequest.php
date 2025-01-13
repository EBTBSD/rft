<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NevRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'password' => 'required|min:6'
        ];
    }
}
