<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryItemPivot extends Model
{
    public $fillable = ['item_id', 'categories_id'];
}
