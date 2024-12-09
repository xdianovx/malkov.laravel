<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => ['required', 'max:70', 'unique:services,title'],
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
        /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Введите заголовок',
            'title.max' => 'Заголовок должен быть не более 70 символов',
            'title.unique' => 'Такой заголовок уже существует',
        ];
    }
}
