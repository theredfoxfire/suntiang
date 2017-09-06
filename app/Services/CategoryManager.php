<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;

class CategoryManager
{
	/**
	* This service will serve all categories data
	*/
	public static function getAllCategories()
	{
		return
			DB::select('select * from categories as c
				order by c.id desc
			');
	}
	/**
    * Get selected category data
    * @return category Object
    */
    public static function getSelectedCategory()
    {
        return DB::select('select * from selected_categories as sc
			left join categories as c on sc.category_id = c.id
			limit 6
		');
    }
}
