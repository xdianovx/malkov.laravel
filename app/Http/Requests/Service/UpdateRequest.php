<?php

namespace App\Http\Requests\Service;

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
            'title' => ['required', 'max:70' , Rule::unique('services')->ignore($this->old_title, 'title')],
            'image' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'image_mob' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'description'  => ['nullable'],
            'content' => ['nullable'],
            'description_footer' => ['nullable'],
            'description_header' => ['nullable'],
            'meta_title'  => ['nullable'],
            'meta_description'  => ['nullable'],
            'meta_keywords'  => ['nullable'],
            'og_url'  => ['nullable'],
            'og_title'  => ['nullable'],
            'og_description'  => ['nullable'],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Введите заголовок',
            'title.max' => 'Заголовок должен быть не более 70 символов',
            'title.unique' => 'Такой заголовок уже существует',
            'image.image' => 'Изображение должно быть файлом изображения',
            'image.max' => 'Изображение должно быть не более 200000 байт',
            'image.mimes' => 'Изображение должно быть одного из следующих типов: jpeg, png, jpg, gif, svg',
            'image_mob.image' => 'Изображение должно быть файлом изображения',
            'image_mob.max' => 'Изображение должно быть не более 200000 байт',
            'image_mob.mimes' => 'Изображение должно быть одного из следующих типов: jpeg, png, jpg, gif, svg',
        ];
    }
}
