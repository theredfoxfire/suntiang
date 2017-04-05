<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetailCreateRequest extends FormRequest
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
          'item_id' => 'required',
          'order_id' => 'required',
          'quantity' => 'required',
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
            'item_id.required' => 'Kolom Item harus diisi.',
            'order_id.required' => 'Kolom Order harus diisi.',
            'quantity.required' => 'Kolom Quantity harus diisi.',
            'total_cost.required' => 'Kolom Total Cost harus diisi.',
        ];
    }
}
