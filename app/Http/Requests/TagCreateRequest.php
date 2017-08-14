<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagCreateRequest extends FormRequest
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
          'tag' => 'required|unique:tags,tag',
          'title' => 'required',
          'subtitle' => 'required',
          'meta_description' => 'required',
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
            'title.required' => 'Kolom judul harus diisi.',
            'tag.required'  => 'Kolom tag harus diisi.',
            'tag.unique' => 'Tag tersebut sudah digunakan.',
            'subtitle.required' => 'Kolom subtitle harus diisi.',
            'meta_description.required' => 'Kolom meta description harus diisi.',
        ];
    }
}
