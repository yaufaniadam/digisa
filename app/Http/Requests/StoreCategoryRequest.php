<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Kategori wajib diisi.',
            'icon.required' => 'Ikon Kategori wajib diisi.',
            'slug.required' => 'Slug Kategori wajib diisi.',
            'url.required' => 'URL Katalog wajib diisi.',
        ];
    }
}
