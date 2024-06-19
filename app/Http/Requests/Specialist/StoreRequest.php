<?php

namespace App\Http\Requests\Specialist;

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
            'title' => ['required', 'max:70', 'unique:specialists,title'],
            'h1_title'=> ['required', 'max:70'],
            'image' => 'nullable|image',
            'image_mob' => 'nullable|image',
            'experience'=> ['nullable', 'max:70'],
            'operations'=> ['nullable', 'max:70'],
            'additional_education'  => ['nullable'],
            'education'  => ['nullable'],
            'description'  => ['nullable'],
            'specializations' => 'nullable|array',
            'specializations.*' => 'nullable|string|exists:specializations,title',
            'services' => 'nullable|array',
            'services.*' => 'nullable|string|exists:services,title',
        ];
    }
}
