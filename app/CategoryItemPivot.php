<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryItemPivot extends Model
{
    public $fillable = ['item_id', 'category_id'];
}
