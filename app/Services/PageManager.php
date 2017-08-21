<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\PaginatorManager;

class PageManager
{
	/**
    * @param $about Array (
    *   string title
    *   text content
    *   string opening_hour
    *   string reservation_info
    *   string promo
    *   string contact_person
    * )
	* @return DB response
    */
	public static function insertAbout($about)
	{
		// filter data and only accept save string
		return DB::table('about')->insert($about);
	}
}
