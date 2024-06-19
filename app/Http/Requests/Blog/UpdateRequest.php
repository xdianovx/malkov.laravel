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
            'image' => 'nullable|image',
            'image_mob' => 'nullable|image',
            'description_header'  => ['nullable'],
            'description'  => ['nullable'],
            'content' => ['nullable'],
            'category_id' => 'required|string',
        ];
    }
}
