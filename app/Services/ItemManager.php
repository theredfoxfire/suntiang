<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\PaginatorManager;

class ItemManager
{
	/**
	* This service will serve all categories data chaining with
	* Items and categories 
	*/
	public static function getAllCategoriesWithItem()
	{
		return 
		PaginatorManager::paginate(
				DB::select('select cip.id as cipID, cat.name as catName, cat.id as catID, i.*, img.id as imgID, img.name as imgName 
					from category_item_pivots as cip left join categories as cat on cat.id = cip.category_id 
					left join items as i on cip.item_id = i.id left join item_images as img on i.id = img.item_id
					order by cat.id desc
					'))
		;
	}
}