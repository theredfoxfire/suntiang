<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdersCreateRequest extends FormRequest
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
            'member_id' => 'required',
            'delivery_id' => 'required',
            'payment_id' => 'required',
            'total_cost' => 'required',
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
            'member_id.required' => 'Kolom Member harus diisi.',
            'delivery_id.required' => 'Kolom Delivery harus diisi.',
            'payment_id.required' => 'Kolom Pembayaran harus diisi.',
            'total_cost.required' => 'Kolom Total Harga harus diisi.',
        ];
    }
}
