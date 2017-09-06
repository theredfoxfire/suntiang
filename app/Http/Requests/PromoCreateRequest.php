<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoCreateRequest extends FormRequest
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
     * Filled data and store file into public dir
     *
     * @return array
     */
    public function fillData()
    {
        if (!empty($this->image)) {
            $imageName = md5(uniqid()).'.'.$this->image->getClientOriginalExtension();
            $this->image->storeAs(config('blog.promoPath'), $imageName);
            $path = empty($this->oldPhoto) ? public_path('uploads').'/'.config('blog.promoPath').'/'.'hdhdhsjd.jjj' : public_path('uploads').'/'.config('blog.promoPath').'/'.$this->oldPhoto;
            if (file_exists($path)) {
                unlink($path);
            }
        } else {
            $imageName = '';
        }

        return [
            'image' => $imageName,
            'description' => $this->description,
            'is_active' => $this->is_active,
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => 'image|required',
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
            'image.required' => 'Kolom Gambar harus diisi.',
            'image.image' => 'Hanya diperbolehkan mengupload file gambar (jpeg, png, bmp, gif, atau svg).',
        ];
    }
}
