<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public $fillable = [
        'code', 'start_date', 'end_date',
        'order_min', 'order_max', 'redeem_max',
        'value', 'presentage', 'is_free_shipping',
        'is_active', 'user_max',
    ];
}
