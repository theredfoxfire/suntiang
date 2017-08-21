<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Services\ItemManager;
use App\Services\CategoryManager;
use App\Model\Categories;

class Item extends Model
{
    public $fillable = ['name', 'description', 'price',
        'is_active', 'day', 'available_date',
        'photo', 'type'];

    public static function itemIndex()
    {
    	$items = ItemManager::getAllCategoriesWithItem();
        $categories = CategoryManager::getAllCategories();
        return compact('items', 'categories');
    }

    /**
    * The many-to-many relationship between categories and items.
    *
    * @return BelongsToMany
    */
    public function tags()
    {
        return $this->belongsToMany('App\Model\Categories', 'category_item_pivots');
    }

    /**
    * Sync tag relation adding new tags as needed
    *
    * @param array $tags
    */
    public function syncTags(array $tags)
    {
        if (count($tags)) {
            $this->tags()->sync(
                Categories::whereIn('name', $tags)->pluck('id')->all()
            );
            return;
        }

        $this->tags()->detach();
    }
}
