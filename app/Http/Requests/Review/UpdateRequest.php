<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:70'],
            'description'=> ['required'],
            'rating'=> ['numeric', 'max:5'],
            'date'  => ['date'],
            'is_active'=> ['nullable'],
            'specialist_id' => ['nullable']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Поле Имя является обязательным',
            'title.max' => 'Поле Имя не может быть длиннее 70 символов',

            'description.required' => 'Текст отзыва является обязательным',

            'rating.numeric' => 'Оценка отзыва должна быть числом',
            'rating.max' => 'Оценка отзыва не может быть больше 5',

            'date.date' => 'Дата отзыва должна быть датой',
        ];
    }
}
