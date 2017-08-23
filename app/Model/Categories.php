<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\CategoryManager;

class Categories extends Model
{
    public $fillable = ['name', 'group', 'parent_id'];

    /**
    * The many-to-many relationship between categories and items.
    *
    * @return BelongsToMany
    */
    public function items()
    {
        return $this->belongsToMany('App\Model\Item', 'category_item_pivots');
    }
}
