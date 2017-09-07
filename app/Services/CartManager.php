<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\PaginatorManager;

class CartManager
{
	public static function getCarts($sessionID)
	{
		return DB::select('
			select i.*, c.* from carts as c left join items as i on i.id = c.item_id
			where c.session_id = "'.$sessionID.'"
		');
	}
}
