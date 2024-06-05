<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:16',
            'role' => 'required|in:admin,user',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Pole nazwa jest wymagane.',
            'email.required' => 'Pole email jest wymagane.',
            'email.email' => 'Pole email musi być poprawnym adresem e-mail.',
            'password.required' => 'Pole hasło jest wymagane.',
            'password.min' => 'Pole hasło musi mieć co najmniej 5 znaków.',
            'password.max' => 'Pole hasło nie może przekraczać 16 znaków.',
            'role.required' => 'Pole rola jest wymagane.',
            'role.in' => 'Pole rola musi być wartością admin lub user.',
        ];
    }
}
