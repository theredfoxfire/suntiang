<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItemsPivot extends Model
{
    public $fillable = ['product_id', 'items_id'];
}
