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
		return DB::table('about')->insert($about);
	}

	/**
    * Listing About
    */
    public static function indexAbout()
    {
        return DB::table('about')->get();
    }
	/**
    * Listing Faq
    */
    public static function indexFaq()
    {
        return DB::select('select c.name as category_name, f.* from faq as f left join faq_categories as c
            on f.category_id = c.id
        ');
    }
	/**
    * Get single About
    */
    public static function getAbout($id)
    {
        $data = DB::table('about')->where('id', '=', $id)->get();
        return $data[0];
    }
	/**
    * Get single FAQ
    */
    public static function getFaq($id)
    {
        $data = DB::table('faq')->where('id', '=', $id)->get();
        return $data[0];
    }
    /**
    * Update About Data
    */
    public static function updateAbout($id, $data)
    {
        unset($data['_token']);
        return DB::table('about')->where('id', $id)
            ->update($data);
    }
    /**
    * Update About Data
    */
    public static function updateFaq($id, $data)
    {
        unset($data['_token']);
        return DB::table('faq')->where('id', $id)
            ->update($data);
    }
    /**
    * Delete Faq Data
    */
    public static function deleteFaq($id)
    {
        return DB::table('faq')->where('id', $id)
            ->delete();
    }

	/**
    * Store new data into DB
    *
    * @param $faq Array (
    *   integer category_id
    *   string question
    *   string answer
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertFaq($faq)
	{
        unset($faq['_token']);
		return DB::table('faq')->insert($faq);
	}
}
