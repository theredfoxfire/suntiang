<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesCreateRequest extends FormRequest
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
            'name' => 'required|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
            'description' => 'required',
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
            'slug.required' => 'Kolom Slug harus diisi.',
            'slug.unique' => 'Slug tersebut sudah digunakan, coba dengan nama slug yang lain.',
            'name.unique' => 'Nama tersebut sudah digunakan, coba dengan nama yang lain.',
            'description.required' => 'Kolom Deskripsi harus diisi.',
        ];
    }
}
