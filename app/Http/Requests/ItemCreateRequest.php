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
            'photo' => 'image',
            'daily_price' => 'required',
            'catering_price_50' => 'required',
            'catering_price_75' => 'required',
            'condiment_price' => 'required',
            'catering_price_100' => 'required',
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
        $newDailyPrice = implode("", explode(".", $this->daily_price));
        $newCondimentPrice = implode("", explode(".", $this->condiment_price));
        $newCateringPrice50 = implode("", explode(".", $this->catering_price_50));
        $newCateringPrice75 = implode("", explode(".", $this->catering_price_75));
        $newCateringPrice100 = implode("", explode(".", $this->catering_price_100));
        return [
            'convertion' => $this->convertion,
            'daily_price' => $newDailyPrice,
            'condiment_price' => $newCondimentPrice,
            'catering_price_50' => $newCateringPrice50,
            'catering_price_75' => $newCateringPrice75,
            'catering_price_100' => $newCateringPrice100,
            'photo' => $imageName,
            'name' => $this->name,
            'description' => $this->description,
            'is_condiment' => $this->is_condiment,
            'is_drink' => $this->is_drink,
            'is_stall' => $this->is_stall,
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
            'photo.image' => 'Hanya diperbolehkan mengupload file gambar (jpeg, png, bmp, gif, atau svg).',
        ];
    }
}
