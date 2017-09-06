<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlidersCreateRequest extends FormRequest
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
            'title' => 'required',
            'file' => 'required|image',
        ];
    }
    /**
     * Filled data and store file into public dir
     *
     * @return array
     */
    public function fillData()
    {
        if (!empty($this->file)) {
            $fileName = md5(uniqid()).'.'.$this->file->getClientOriginalExtension();
            $this->file->storeAs(config('blog.sliderPath'), $fileName);
            $path = empty($this->oldPhoto) ? public_path('uploads').'/'.config('blog.sliderPath').'/'.'hdhdhsjd.jjj' : public_path('uploads').'/'.config('blog.promoPath').'/'.$this->oldPhoto;
            if (file_exists($path)) {
                unlink($path);
            }
        } else {
            $fileName = '';
        }

        return [
            'file' => $fileName,
            'title' => $this->title,
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
            'title.required' => 'Kolom Judul harus diisi.',
            'file.required' => 'Kolom Gambar harus diisi.',
            'file.image' => 'Hanya diperbolehkan mengupload file gambar (jpeg, png, bmp, gif, atau svg).',
        ];
    }
}
