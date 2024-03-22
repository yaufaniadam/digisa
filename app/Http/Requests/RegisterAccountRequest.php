<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAccountRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:255', 'unique:users,name'],
            'email' => ['required', 'email:filter', 'unique:users,email'],
            'phone' => ['required', 'numeric', 'unique:users,phone', 'min:11','regex:/^628\d{8,}$/'],
            'organization_name' => ['required', 'string'],
            'purposes' => ['required', 'string'],
            'password' => ['required', 'string', 'confirmed', 'min:8'],
            'password_confirmation' => ['required', 'string'],
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi',           
            'email.required' => 'Email wajib diisi',           
            'email.unique' => 'Email sudah terdaftar, silakan gunakan email lain.',  
            'purposes.required' => 'Keperluan wajib diisi',
            'phone.required' => 'Nomor telepon wajib diisi',
            'phone.numeric' => 'Nomor telepon harus berupa angka',
            'phone.unique' => 'Nomor telepon sudah terdaftar',
            'phone.min' => 'Nomor telepon terlalu pendek',
            'phone.regex' => 'Format nomor telepon tidak sesuai contoh, yang benar: 6285625674567',
            'organization_name.required' => 'Nama Instansi wajib diisi',
            'password.required' => 'Kata Sandi wajib diisi',
            'password.min' => 'Kata Sandi minimal 8 karakter',
            // 'password.regex' => 'Gunakan kombinasi huruf dan angka, dan mengandung setidaknya 1 huruf besar atau huruf kecil.',
            'password.confirmed' => 'Kata Sandi tidak sama',
            'password_confirmation.required' => 'Konfirmasi Kata Sandi wajib diisi',
        ];
    }
}
