<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingCost extends Model
{
    public $fillable = ['name', 'fare'];
}
