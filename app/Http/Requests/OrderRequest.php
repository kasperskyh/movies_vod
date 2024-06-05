<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
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
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:20',
            'date_of_birth' => 'required|numeric|min:1930|max:' . date('Y'),
            'email' => 'required|string|email|max:50',
            'phone_number' => 'required|numeric|digits:9',
            'movie_id' => ['required', Rule::exists('movies', 'id')],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Pole imię jest wymagane.',
            'first_name.string' => 'Pole imię musi być ciągiem znaków.',
            'first_name.max' => 'Pole imię nie może przekraczać 20 znaków.',
            'last_name.required' => 'Pole nazwisko jest wymagane.',
            'last_name.string' => 'Pole nazwisko musi być ciągiem znaków.',
            'last_name.max' => 'Pole nazwisko nie może przekraczać 20 znaków.',
            'date_of_birth.required' => 'Pole data urodzenia jest wymagane.',
            'date_of_birth.numeric' => 'Pole data urodzenia musi być liczbą.',
            'date_of_birth.min' => 'Pole data urodzenia musi być większe lub równe 1930.',
            'date_of_birth.max' => 'Pole data urodzenia nie może przekraczać bieżącego roku.',
            'email.required' => 'Pole email jest wymagane.',
            'email.string' => 'Pole email musi być ciągiem znaków.',
            'email.email' => 'Pole email musi być poprawnym adresem e-mail.',
            'email.max' => 'Pole email nie może przekraczać 50 znaków.',
            'phone_number.required' => 'Pole numer telefonu jest wymagane.',
            'phone_number.numeric' => 'Pole numer telefonu musi być ciągiem znaków.',
            'phone_number.digits' => 'Pole numer telefonu musi zawierać 9 znaków.',
            'movie_id.required' => 'Pole ID filmu jest wymagane.',
        ];
    }
}
