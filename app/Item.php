<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Services\ItemManager;
use App\Services\CategoryManager;

class Item extends Model
{
    public $fillable = ['name', 'description', 'price', 'is_special', 'day', 'available_date'];

    public static function itemIndex() 
    {
    	$items = ItemManager::getAllCategoriesWithItem();
        $categories = CategoryManager::getAllCategories();
        return compact('items', 'categories');
    }
}
