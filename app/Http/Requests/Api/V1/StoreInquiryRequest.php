<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreInquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'company' => ['nullable', 'string', 'max:120'],
            'email' => ['required', 'string', 'email', 'max:150'],
            'phone' => ['required', 'string', 'max:30', 'regex:/^[0-9+\-\s()]+$/'],
            'product_id' => [
                'nullable',
                'integer',
                Rule::exists('products', 'id')->where('is_active', true),
            ],
            'quantity' => ['nullable', 'integer', 'min:1', 'max:10000'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:20', 'max:3000'],
            'website' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama dan instansi wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email belum benar.',
            'phone.required' => 'Nomor telepon atau WhatsApp wajib diisi.',
            'phone.regex' => 'Nomor telepon hanya boleh berisi angka, spasi, +, -, atau tanda kurung.',
            'product_id.exists' => 'Produk yang dipilih tidak tersedia.',
            'subject.required' => 'Topik pesan wajib diisi.',
            'message.required' => 'Pesan wajib diisi.',
            'message.min' => 'Ceritakan kebutuhan Anda sedikit lebih lengkap (minimal 20 karakter).',
        ];
    }
}
