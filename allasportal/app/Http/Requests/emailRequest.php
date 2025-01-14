<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'oldemail' => 'required|email',
            'email' => 'required|email|unique:users,email|max:100',
            'comfemail' => 'required|email|same:email|max:100',
            'password' => 'required'
        ];
    }
}
