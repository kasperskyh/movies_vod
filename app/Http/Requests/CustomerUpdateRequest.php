<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'date_of_birth' => 'required|numeric|min:1930|max:' . date('Y'),
            'email' => 'required|email|max:50',
            'phone_number' => 'required|numeric|digits:9',
        ];
    }

    public function messages()
    {
        return [
            'first_name.max' => 'Pole imię nie może przekraczać 50 znaków.',
            'last_name.max' => 'Pole nazwisko nie może przekraczać 50 znaków.',
            'date_of_birth.numeric' => 'Pole data urodzenia musi być liczbą.',
            'date_of_birth.min' => 'Pole data urodzenia musi być większe lub równe 1930.',
            'date_of_birth.max' => 'Pole data urodzenia nie może przekraczać bieżącego roku.',
            'email.max' => 'Pole email nie może przekraczać 50 znaków.',
            'phone_number.required' => 'Pole numer telefonu jest wymagane.',
            'phone_number.numeric' => 'Pole numer telefonu musi być liczbą.',
            'phone_number.digits' => 'Pole numer telefonu musi zawierać 9 znaków.',
        ];
    }
}
