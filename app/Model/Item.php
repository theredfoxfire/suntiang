<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use App\Services\ItemManager;
use App\Services\CategoryManager;
use App\Model\Categories;

class Item extends Model
{
    public $fillable = [
        'name', 'type', 'photo',
        'description', 'convertion', 'daily_price',
        'condiment_price', 'catering_price_50', 'catering_price_75',
        'catering_price_100',
        'is_stall', 'is_condiment', 'is_drink'
    ];

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
    * The many-to-many relationship between categories and items.
    *
    * @return BelongsToMany
    */
    public function drink()
    {
        return $this->belongsToMany('App\Model\Item', 'item_pivot');
    }
    /**
    * The many-to-many relationship between categories and items.
    *
    * @return BelongsToMany
    */
    public function condiment()
    {
        return $this->belongsToMany('App\Model\Item', 'item_pivot');
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
    /**
    * Sync tag relation adding new tags as needed
    *
    * @param array $tags
    */
    public function syncDrink(array $tags)
    {
        print_r($this->whereIn('name', $tags)->pluck('id')->all());
        exit();
        if (count($tags)) {
            $this->drink()->sync(
                $this->whereIn('name', $tags)->pluck('id')->all()
            );
            return;
        }

        $this->drink()->detach();
    }
    /**
    * Sync tag relation adding new tags as needed
    *
    * @param array $tags
    */
    public function syncCodiment(array $tags)
    {
        if (count($tags)) {
            $this->condiment()->sync(
                $this->whereIn('name', $tags)->pluck('id')->all()
            );
            return;
        }

        $this->condiment()->detach();
    }
}
