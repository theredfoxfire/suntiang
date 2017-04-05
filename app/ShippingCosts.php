<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingCosts extends Model
{
    public $fillable = ['name', 'fare'];
}
