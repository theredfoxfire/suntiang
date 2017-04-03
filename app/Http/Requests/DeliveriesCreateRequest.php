<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveriesCreateRequest extends FormRequest
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
            'order_id' => 'required',
            'district_id' => 'required',
            'postal_code' => 'required',
            'delivery_status' => 'required',
            'delivery_time' => 'required',
            'delivery_receiver' => 'required',
            'delivery_receiver_phone' => 'required',
            'delivery_address' => 'required',
            'delivery_date' => 'required',
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
            'order_id.required' => 'Kolom Order harus diisi.',
            'district_id.required' => 'Kolom Kecamatan harus diisi.',
            'postal_code.required' => 'Kolom Kode Pos harus diisi.',
            'delivery_status.required' => 'Kolom Status Pengiriman harus diisi.',
            'delivery_time.required' => 'Kolom Waktu Pengiriman harus diisi.',
            'delivery_receiver.required' => 'Kolom Penerima Kiriman harus diisi.',
            'delivery_receiver_phone.required' => 'Kolom No. Telphone Penerima Kiriman harus diisi.',
            'delivery_address.required' => 'Kolom Alamat Pengiriman harus diisi.',
            'delivery_date.required' => 'Kolom Tanggal Pengiriman harus diisi.',
        ];
    }
}
