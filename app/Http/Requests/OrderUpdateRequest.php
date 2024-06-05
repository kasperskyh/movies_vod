<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class OrderUpdateRequest extends FormRequest
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
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'price' => 'required|numeric',
            'date' => 'required|date|before_or_equal:' . date('d-m-Y'),
        ];
    }

    public function messages()
    {
        return [
            'movie_id.required' => 'Pole ID filmu jest wymagane.',
            'price.required' => 'Pole cena jest wymagane.',
            'price.numeric' => 'Pole cena musi być liczbą.',
            'date.required' => 'Pole data jest wymagane.',
            'date.date' => 'Pole data musi być poprawnym formatem daty.',
            'date.before_or_equal' => 'Pole data nie może być późniejsza niż bieżąca data.',
        ];
    }
}
