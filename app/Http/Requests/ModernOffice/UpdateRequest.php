<?php

namespace App\Http\Requests\ModernOffice;

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
            'title' => ['required', 'max:70'],
            'description'  => ['nullable'],
            'file' => 'nullable|file|max:200000|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg',
            'file_mob' => 'nullable|file|max:200000|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg'
        ];
    }
}
