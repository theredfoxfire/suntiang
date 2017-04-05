<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageFieldsCreateRequest extends FormRequest
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
            'page_id' => 'required',
            'field_name' => 'required',
            'field_content' => 'required',
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
            'page_id.required' => 'Kolom Page harus diisi.',
            'field_name.required' => 'Kolom Nama Kolom harus diisi.',
            'field_content.required' => 'Kolom Konten harus diisi.',
        ];
    }
}
