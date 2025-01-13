<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'oldjelszo' => 'required|min:6',
            'password' => 'required|min:6|confirmed'
        ];
    }
}
