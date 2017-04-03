<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryTrackingsCreateRequest extends FormRequest
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
            'user_id' => 'required',
            'delivery_id' => 'required',
            'courier_id' => 'required',
            'tracking_status' => 'required',
            'current_position' => 'required',
            'additional_note' => 'required',
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
            'user_id.required' => 'Kolom User harus diisi.',
            'delivery_id.required' => 'Kolom Delivery harus diisi.',
            'courier_id.required' => 'Kolom Kurir harus diisi.',
            'tracking_status.required' => 'Kolom Status Tracking harus diisi.',
            'current_position.required' => 'Kolom Lokasi Sekarang harus diisi.',
            'additional_note.required' => 'Kolom Catatan Tambahan harus diisi.',
        ];
    }
}
