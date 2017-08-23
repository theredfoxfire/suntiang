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
    * Store new data into DB
    *
    * @param $faqCategory Array (
    *   string name
    *   string description
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertFaqCategory($faqCategory)
	{
		return DB::table('faq_category')->insert($faqCategory);
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
		return DB::table('faq')->insert($faq);
	}

	/**
    * Store new data into DB
    *
    * @param $promo Array (
    *   string image
    *   string description
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertPromo($promo)
	{
		return DB::table('promo')->insert($promo);
	}

	/**
    * Store new data into DB
    *
    * @param $howtoorder_category Array (
    *   string name
    *   string description
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertHowtoorderCategory($howtoorder_category)
	{
		return DB::table('howtoorder_category')->insert($howtoorder_category);
	}

	/**
    * Store new data into DB
    *
    * @param $howtoorder Array (
	* 	integer category_id
    *   string title
    *   string description
	*	integer step
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertHowtoorder($howtoorder)
	{
		return DB::table('howtoorder')->insert($howtoorder);
	}

	/**
    * Store new data into DB
    *
    * @param $desclaimer Array (
    *   string title
    *   string description
	*	integer sort
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertDesclaimer($desclaimer)
	{
		return DB::table('desclaimer')->insert($desclaimer);
	}
	/**
    * Store new data into DB
    *
    * @param $privacy Array (
    *   string title
    *   string description
	*	integer sort
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertPrivacy($privacy)
	{
		return DB::table('privacy')->insert($privacy);
	}
	/**
    * Store new data into DB
    *
    * @param $term Array (
    *   string title
    *   string description
	*	integer sort
    *   tiny int is_active
    * @return DB response
    * )
    */
	public static function insertTerm($term)
	{
		return DB::table('term')->insert($term);
	}
}
