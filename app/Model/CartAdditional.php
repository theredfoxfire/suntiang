<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartAdditional extends Model
{
    public $fillable = ['cart_id', 'item_id', 'quantity', 'price'];
}
