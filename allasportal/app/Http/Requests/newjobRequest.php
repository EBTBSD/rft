<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewjobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|integer|min:0',
            'description' => 'required|string',
            'publisher' => 'required|string|max:255',
        ];
    }
}
