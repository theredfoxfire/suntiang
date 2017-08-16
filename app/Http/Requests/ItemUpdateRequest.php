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
            $path = empty($this->oldPhoto) ? public_path('uploads').'/'.config('blog.itemPath').'/'.'hdhdhsjd.jjj' : public_path('uploads').'/'.config('blog.itemPath').'/'.$this->oldPhoto;
            if (file_exists($path)) {
                unlink($path);
            }
        } else {
            $imageName = $this->oldPhoto;
        }
        $newPrice = implode("", explode(".", $this->price));
        return [
            'photo' => $imageName,
            'name' => $this->name, 'price' => $newPrice,
            'description' => $this->description, 'is_active' => $this->is_active,
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
            'photo.image' => 'Hanya diperbolehkan mengupload file gambar (jpeg, png, bmp, gif, atau svg).',
        ];
    }
}
