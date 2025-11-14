<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeroRequest extends FormRequest
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
            'main_title' => ['required', 'string'],
            'btn_title' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'description' => ['required', 'string'],
        ];
    }
}
