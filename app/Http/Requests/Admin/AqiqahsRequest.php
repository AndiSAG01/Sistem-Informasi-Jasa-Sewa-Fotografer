<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AqiqahsRequest extends FormRequest
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
            'basics_id' => 'required|string', // Ubah sesuai dengan tipe data dan validasi yang sesuai
            'description' => 'nullable|string', // Sesuaikan panjang maksimum dengan kebutuhan Anda
            'price' => 'required|string',
        ];
    }
}
