<?php

namespace Modules\Auth\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Mohon isikan email terlebih dahulu!',
            'email.email' => 'Mohon isikan format email yang benar!',
            'email.exists' => 'Data email tidak ditemukan!',
            'password.required' => 'Mohon isikan password terlebih dahulu!',
        ];
    }
}
