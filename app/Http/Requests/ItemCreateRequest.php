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
            'name' => 'required|unique:items,name',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'image',
        ];
    }

    /**
     * Filled data and store file into public dir
     *
     * @return array
     */
    public function fillData()
    {
        if (!empty($this->photo)) {
            $imageName = md5(uniqid()).'.'.$this->photo->getClientOriginalExtension();
            $this->photo->storeAs(config('blog.itemPath'), $imageName);
        } else {
            $imageName = '';
        }
        $newPrice = implode("", explode(".", $this->price));
        return [
            'photo' => $imageName,
            'name' => $this->name, 'price' => $newPrice,
            'description' => $this->description, 'is_active' => $this->is_active,
        ];
    }
    /**
     * Filled data and store file into public dir
     *
     * @return array
     */
    public function fillItem() {
        $formData = $this->fillData();
        return array_merge($formData, array('type' => 'item'));
    }
    /**
     * Filled data and store file into public dir
     *
     * @return array
     */
    public function fillPackage() {
        $formData = $this->fillData();
        return array_merge($formData, array('type' => 'package'));
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
            'photo.image' => 'Hanya diperbolehkan mengupload file gambar (jpeg, png, bmp, gif, atau svg).',
        ];
    }
}
