<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\CartManager;

class Carts extends Model
{
    public $fillable = ['session_id', 'item_id', 'quantity', 'price', 'on_date', 'on_hour'];

    public static function getCarts($sessionID)
    {
        return CartManager::getCarts($sessionID);
    }
}
