<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    public $fillable = [
        'order_id',
        'district_id',
        'postal_code',
        'delivery_status',
        'delivery_time',
        'delivery_receiver',
        'delivery_receiver_phone',
        'delivery_address',
        'delivery_date',
    ];
}
