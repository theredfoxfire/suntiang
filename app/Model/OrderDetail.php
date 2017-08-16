<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $fillable = [
        'item_id',
        'order_id',
        'quantity',
        'total_cost',
        'is_canceled',
    ];
}
