<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    public $fillable = ['order_id', 'amount', 'payment_method', 'payment_status'];
}
