<?php

namespace App\Http\Requests\Specialist;

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
            'title' => ['required', 'max:70', Rule::unique('specialists')->ignore($this->old_title, 'title')],
            'h1_title'=> ['required', 'max:70'],
            'image' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'image_mob' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'experience'=> ['nullable', 'max:70'],
            'operations'=> ['nullable', 'max:70'],
            'education' => ['nullable', 'array'],
            'education.*' => ['nullable', 'string'],
            'specializations' => ['nullable', 'array'],
            'specializations.*' => ['nullable', 'string'],
            'description'  => ['nullable'],
            'services' => 'nullable|array',
            'services.*' => 'nullable|string|exists:services,title',

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
            'title.required' => 'Поле заголовка обязательно к заполнению.',
            'title.max' => 'Заголовок не может быть длиннее 70 символов.',
            'title.unique' => 'Такой заголовок уже существует.',
            'h1_title.required' => 'Поле H1 заголовка обязательно к заполнению.',
            'h1_title.max' => 'H1 заголовок не может быть длиннее 70 символов.',
            'image.image' => 'Изображение должно быть файлом-изображением.',
            'image.max' => 'Изображение не может быть больше 200000 килобайт.',
            'image.mimes' => 'Изображение должно быть файлом формата: jpeg, png, jpg, gif, svg.',
            'image_mob.image' => 'Мобильное изображение должно быть файлом-изображением.',
            'image_mob.max' => 'Мобильное изображение не может быть больше 200000 килобайт.',
            'image_mob.mimes' => 'Мобильное изображение должно быть файлом формата: jpeg, png, jpg, gif, svg.',
            'experience.max' => 'Опыт не может быть длиннее 70 символов.',
            'operations.max' => 'Операции не могут быть длиннее 70 символов.',
            'education.array' => 'Образование должно быть массивом.',
            'education.*.string' => 'Каждый пункт образования должен быть строкой.',
            'specializations.array' => 'Специализации должны быть массивом.',
            'specializations.*.string' => 'Каждая специализация должна быть строкой.',
            'services.array' => 'Услуги должны быть массивом.',
            'services.*.string' => 'Каждый пункт услуг должен быть строкой.',
            'services.*.exists' => 'Выбранная услуга не существует.',
        ];
    }
}
