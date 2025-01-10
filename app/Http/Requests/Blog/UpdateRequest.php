<?php

namespace App\Http\Requests\Blog;

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
            'title' => ['required', 'max:70', Rule::unique('blogs')->ignore($this->old_title, 'title')],
            'h1_title'=> ['required', 'max:70'],
            'image' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'image_mob' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'description_header'  => ['nullable'],
            'description'  => ['nullable'],
            'content' => ['nullable'],

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
            'h1_title.required' => 'Поле "Заголовок" обязательно для заполнения',
            'h1_title.max' => 'Заголовок не может быть длиннее 70 символов',
            'image.max' => 'Размер изображения не может быть более 200кб',
            'image.mimes' => 'Изображение должно быть в одном из следующих форматов: jpeg, png, jpg, gif, svg',
            'image_mob.max' => 'Размер изображения не может быть более 200кб',
            'image_mob.mimes' => 'Изображение должно быть в одном из следующих форматов: jpeg, png, jpg, gif, svg',
        ];
    }
}
