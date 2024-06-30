<?php

namespace App\Http\Requests\Block;

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
            'title' => ['required', 'max:70', 'unique:blogs,title'],
            'h1_title'=> ['required', 'max:70'],
            'is_active'=> ['required', 'max:70'],
            'description'  => ['nullable'],
        ];
    }
}
