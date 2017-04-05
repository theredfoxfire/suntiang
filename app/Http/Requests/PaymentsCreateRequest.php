<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentsCreateRequest extends FormRequest
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
            'amount' => 'required',
            'payment_method' => 'required',
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
          'order_id.required' => 'Kolom Oreder harus diisi.',
          'amount.required' => 'Kolom Jumlah harus diisi.',
          'payment_method.required' => 'Kolom Metode Pembayaran harus diisi.',
      ];
    }
}
