<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CartsProductPivot extends Model
{
    public $fillable = ['item_id', 'cart_id'];
}
