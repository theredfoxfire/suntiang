<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdditionalProductPivot extends Model
{
    public $fillable = ['item_id', 'product_id'];
}
