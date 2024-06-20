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
            'image' => 'nullable|image',
            'image_mob' => 'nullable|image',
            'description'  => ['nullable'],
            'content' => ['nullable'],
            'description_footer' => ['nullable'],
            'description_header' => ['nullable'],
        ];
    }
}
