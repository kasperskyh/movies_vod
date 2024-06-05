<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:50',
            'age' => 'required|numeric|in:3,7,12,18',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Pole nazwa jest wymagane.',
            'name.string' => 'Pole nazwa musi być ciągiem znaków.',
            'name.max' => 'Pole nazwa nie może przekraczać 50 znaków.',
            'description.required' => 'Pole opis jest wymagane.',
            'description.string' => 'Pole opis musi być ciągiem znaków.',
            'description.max' => 'Pole opis nie może przekraczać 50 znaków.',
            'age.required' => 'Pole wiek jest wymagane.',
            'age.numeric' => 'Pole wiek musi być wartoscia numerczyna.',
            'age.in' => 'Pole wiek musi być jednym z: 3, 7, 12, 18.',
        ];
    }
}
