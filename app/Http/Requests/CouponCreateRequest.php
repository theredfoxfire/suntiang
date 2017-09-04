<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponCreateRequest extends FormRequest
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
            'code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'order_min' => 'required',
            'order_max' => 'required',
            'redeem_max' => 'required',
            'user_max' => 'required',
            'value' => 'required',
            'presentage' => 'required',
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
            'email.required' => 'Kolom Email harus diisi.',
        ];
    }
}
