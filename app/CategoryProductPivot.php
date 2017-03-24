<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProductPivot extends Model
{
    public $fillable = ['category_id', 'product_id'];
}
