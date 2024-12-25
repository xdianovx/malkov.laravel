<?php

namespace App\Http\Requests\Page;

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
            'title_h1' => ['nullable', 'max:70'],
            'description'  => ['nullable'],
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
            'title_h1.max' => 'Заголовок не может быть длиннее 70 символов'
        ];
    }
}
