<?php

namespace App\Http\Requests\Price;

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
            'price'=> ['required', 'regex:/^\d+$/', 'max:70'],
            'is_the_price_from'=> ['nullable'],
            'discounted_price'=> ['nullable', 'max:70'],
            'link_service'  => ['nullable'],
            'description'  => ['nullable']
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Введите заголовок',
            'title.max' => 'Заголовок не может быть длиннее 70 символов',
            'price.required' => 'Введите цену',
            'price.regex' => 'Цена должна быть числом без пробелов и символов',
            'price.max' => 'Цена не может быть длиннее 70 символов',
        ];
    }
}
