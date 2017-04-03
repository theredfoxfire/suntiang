<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCreateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:item,name',
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
            'name.unique' => 'Nama tersebut sudah digunakan, coba dengan nama lain.',
            'description.required' => 'Kolom Deskripsi harus diisi.',
            'price.required' => 'Kolom harga harus diisi.',
            'day.required' => 'Kolom hari harus diisi.',
            'available_date.required' => 'Kolom Tanggal Tersedia harus diisi.',
        ];
    }
}
