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
            'file' => 'required|file|max:200000|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg,webm',
            'file_mob' => 'nullable|file|max:200000|mimes:jpeg,png,jpg,gif,svg,mp4,mov,ogg,webm',
            'is_cover' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Заголовок обязательно должен быть заполнен',
            'title.max' => 'Заголовок не должен превышать 70 символов',
            'file.required' => 'Вы должны добавить файл',
            'file.file' => 'Вы должны добавить файл',
            'file.max' => 'Файл не должен превышать 200000 кб',
            'file.mimes' => 'Файл должен быть одного из следующих форматов: jpeg, png, jpg, gif, svg, mp4, mov, ogg, webm',
            'file_mob.file' => 'Вы должны добавить файл',
            'file_mob.max' => 'Файл не должен превышать 200000 кб',
            'file_mob.mimes' => 'Файл должен быть одного из следующих форматов: jpeg, png, jpg, gif, svg, mp4, mov, ogg, webm',
            'is_cover.required' => 'Вы должны указать, является ли файл обложкой'
        ];
    }
}
