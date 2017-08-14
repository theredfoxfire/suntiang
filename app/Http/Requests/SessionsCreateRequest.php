<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionsCreateRequest extends FormRequest
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
          'id' => 'required',
          'user_id' => 'required',
          'ip_address' => 'required',
          'user_agent' => 'required',
          'payload' => 'required',
          'last_activity' => 'required',
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
            'id.required' => 'Kolom ID harus diisi.',
            'user_id.required' => 'Kolom User harus diisi.',
            'ip_address.required' => 'Kolom IP Address harus diisi.',
            'user_agent.required' => 'Kolom User Agent harus diisi.',
            'payload.required' => 'Kolom Payload harus diisi.',
            'last_activity.required' => 'Kolom Last Activity harus diisi.',
        ];
    }
}
