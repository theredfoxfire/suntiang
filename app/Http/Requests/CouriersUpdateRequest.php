<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouriersUpdateRequest extends FormRequest
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
            'name' => 'required',
            'photo' => 'required',
            'phone' => 'required',
            'email' => 'required',
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
            'photo.required' => 'Kolom Photo harus diisi.',
            'email.required' => 'Kolom Email harus diisi.',
            'phone.required' => 'Kolom Nomor telphone harus diisi.',
        ];
    }
}
