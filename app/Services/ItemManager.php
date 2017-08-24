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
		// $safe_string = DB::connection()->getPdo()->quote($string);
		return
		PaginatorManager::paginate(
				DB::select('select cip.id as cipID, cat.name as catName, cat.id as catID, i.*, img.id as imgID, img.name as imgName
					from category_item_pivots as cip left join categories as cat on cat.id = cip.categories_id
					left join items as i on cip.item_id = i.id left join item_images as img on i.id = img.item_id
					order by cat.id desc
					'))
		;
	}

	/**
	* Insert item into pivot item
	* @param $formData array(
	*	integer itemID
	* )
	* @param integer $itemID latest itemID
	* @param string $type item
	*/
	public static function insertItemPivot($formData, $itemID, $type)
	{
		$data = array();
		foreach ($formData as $value) {
			array_push($data, array(
				'parent_id' => $itemID,
				'child_id' => $value,
				'type' => $type,
			));
		}
		return DB::table('item_pivot')->insert($data);
	}
	/**
	* @param string $type
	* @return Array Object items
	*/
	public static function getChild($type, $itemID)
	{
		$dbdata = DB::select("
			select ic.name from item_pivot as ip inner join items as ic
			on ip.child_id = ic.id where ip.type = '$type' and ip.parent_id = $itemID
		");
		$data = array();
		foreach ($dbdata as $key => $value) {
			array_push($data, $value->name);
		}
		return $data;
	}

	/**
	* Delete item_pivot by parentID
	* @param integer $parentID
	*/
	public static function deleteChild($parentID)
	{
		DB::table('item_pivot')->where('parent_id', '=', $parentID)->delete();
	}
}
