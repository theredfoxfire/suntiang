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
}