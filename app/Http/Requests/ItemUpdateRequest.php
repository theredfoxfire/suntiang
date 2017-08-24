<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemUpdateRequest extends FormRequest
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
            $path = empty($this->oldPhoto) ? public_path('uploads').'/'.config('blog.itemPath').'/'.'hdhdhsjd.jjj' : public_path('uploads').'/'.config('blog.itemPath').'/'.$this->oldPhoto;
            if (file_exists($path)) {
                unlink($path);
            }
        } else {
            $imageName = $this->oldPhoto;
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
            'is_stall' => $this->is_stall,
            'is_drink' => $this->is_drink,
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
            'photo.image' => 'Hanya diperbolehkan mengupload file gambar (jpeg, png, bmp, gif, atau svg).',
        ];
    }
}
