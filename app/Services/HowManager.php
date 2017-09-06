<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\PaginatorManager;

class HowManager
{
	public static function getHowCategory()
	{
		return DB::select('
			select * from category_hows limit 1
		');
	}

	public static function getHowByCategory($id)
	{
		return DB::select('
			select * from how_to_orders where category_id = '.$id.'
		');
	}

	/**
    * Listing How
    */
    public static function indexHow()
    {
        return DB::select('select c.name as category_name, h.* from how_to_orders as h left join category_hows as c
            on h.category_id = c.id
        ');
    }
}
