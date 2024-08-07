<?php

namespace App\Http\Requests\ShowReel;

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
            'title' => ['required', 'max:70'],
            'file' => 'required|file|max:200000|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg',
            'file_mob' => 'nullable|file|max:200000|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg',
            'is_cover' => 'required'
        ];
    }
}
