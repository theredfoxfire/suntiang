<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    public $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'bank_account_number',
        'bank_account_name',
        'bank_name',
        'credit_card_number',
        'credit_card_name',
        'birthdate',
        'sex',
        'address',
        'district_id',
        'is_active',
    ];
}
