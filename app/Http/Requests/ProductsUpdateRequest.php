<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'day' => 'required',
            'available_date' => 'required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Kolom Nama harus diisi.',
            'description.required' => 'Kolom Deskripsi harus diisi.',
            'price.required' => 'Kolom harga harus diisi.',
            'day.required' => 'Kolom hari harus diisi.',
            'available_date.required' => 'Kolom Tanggal Tersedia harus diisi.',
        ];
    }
}
