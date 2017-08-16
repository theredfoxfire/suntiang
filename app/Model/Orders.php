<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public $fillable = [
        'member_id',
        'delivery_id',
        'payment_id',
        'total_cost',
        'is_canceled',
    ];
}
