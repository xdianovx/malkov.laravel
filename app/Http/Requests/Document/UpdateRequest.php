<?php

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;

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
            'title' => ['required', 'max:140'],
            'image' => 'required|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'description'  => ['nullable'],
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Поле "Заголовок" обязательно для заполнения',
            'title.max' => 'Заголовок не может быть длиннее 140 символов',
            'image.max' => 'Размер изображения не может быть более 200кб',
            'image.mimes' => 'Изображение должно быть в одном из следующих форматов: jpeg, png, jpg, gif, svg',
        ];
    }
}
