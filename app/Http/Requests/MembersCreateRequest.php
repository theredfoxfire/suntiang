<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersCreateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:members,email',
            'phone' => 'required|unique:members,phone',
            'bank_account_number' => 'required',
            'bank_account_name' => 'required',
            'bank_name' => 'required',
            'credit_card_number' => 'required',
            'credit_card_name' => 'required',
            'birthdate' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'district_id' => 'required',
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
            'name.required' => 'Kolom Name harus diisi.',
            'email.required' => 'Kolom Email harus diisi.',
            'email.unique' => 'Email tersebut sudah digunakan, coba dengan email lain.',
            'phone.required' => 'Kolom Telephone harus diisi.',
            'phone.unique' => 'Nomor Telphone tersebut sudah digunakan, coba dengan nomor lain.',
            'bank_account_number.required' => 'Kolom Nomor Rekening harus diisi.',
            'bank_account_name.required' => 'Kolom Nama Pemilik rekening harus diisi.',
            'bank_name.required' => 'Kolom Nama Bank harus diisi.',
            'credit_card_number.required' => 'Kolom Nomor Kartu Kredit harus diisi.',
            'credit_card_name.required' => 'Kolom Nama Pemilik Kartu Kredit harus diisi.',
            'birthdate.required' => 'Kolom Tanggal Lahir harus diisi.',
            'sex.required' => 'Kolom Jenis Kelamin harus diisi.',
            'address.required' => 'Kolom Alamat harus diisi.',
            'district_id.required' => 'Kolom Kecamatan harus diisi.',
        ];
    }
}
