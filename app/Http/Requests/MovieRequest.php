<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'duration' => 'required|integer',
            'rate' => 'required|integer|min:0|max:10',
            'category_id' => 'required',
            'price' => 'required|numeric|between:0,999999.99',
            'company' => 'required|string|max:255',
            'img' => 'required|image|dimensions:max_width=650,max_height=430',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Pole tytuł jest wymagane.',
            'title.string' => 'Pole tytuł musi być ciągiem znaków.',
            'title.max' => 'Pole tytuł nie może przekraczać 50 znaków.',
            'duration.required' => 'Pole czas trwania jest wymagane.',
            'duration.integer' => 'Pole czas trwania musi być liczbą całkowitą.',
            'rate.required' => 'Pole ocena jest wymagane.',
            'rate.integer' => 'Pole ocena musi być liczbą całkowitą.',
            'rate.min' => 'Pole ocena musi być większe lub równe 0.',
            'rate.max' => 'Pole ocena nie może przekraczać 10.',
            'category_id.required' => 'Pole kategoria jest wymagane.',
            'price.required' => 'Pole cena jest wymagane.',
            'price.numeric' => 'Pole cena musi być liczbą.',
            'price.between' => 'Pole cena musi zawierać się w przedziale od 0 do 999999.99.',
            'company.required' => 'Pole firma jest wymagane.',
            'company.string' => 'Pole firma musi być ciągiem znaków.',
            'company.max' => 'Pole firma nie może przekraczać 255 znaków.',
            'img.required' => 'Pole obrazek jest wymagane.',
            'img.image' => 'Pole obrazek musi być plikiem graficznym.',
            'img.dimensions' => 'Pole obrazek musi mieć maksymalne wymiary 650x430 pikseli.',
        ];
    }
}
