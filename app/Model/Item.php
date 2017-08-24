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
    * @return DB Response
    */
    public function syncChild(array $tags, $type)
    {
        $formData = $this->whereIn('name', $tags)->pluck('id')->all();
        $itemID = $this->id;

        return ItemManager::insertItemPivot($formData, $itemID, $type);
    }
    /**
    * Get item child
    * @param string $type, integer $itemID
    * @return Array Object of items
    */
    public function getChild($type, $itemID)
    {
        return ItemManager::getChild($type, $itemID);
    }
    /**
	* Delete item_pivot by parentID
	* @param integer $parentID
	*/
	public static function deleteChild($parentID)
	{
		ItemManager::deleteChild($parentID);
	}
}
