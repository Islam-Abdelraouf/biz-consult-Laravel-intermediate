<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'email' => ['required', 'email'],
            'facebook' => ['nullable', 'string'],
            'twitter' => ['nullable', 'string'],
            'youtube' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
        ];
    }
    public function attributes(): array
    {
        return [
            'address' => __('keywords.address'),
            'phone' => __('keywords.phone'),
            'email' =>__('keywords.email'),
            'facebook' => __('keywords.facebook'),
            'twitter' => __('keywords.twitter'),
            'youtube' => __('keywords.youtube'),
            'linkedin' => __('keywords.linkedin'),
            'instagram' => __('keywords.instagram'),
        ];
    }
}
