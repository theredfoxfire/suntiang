<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\PageManager;

class Pages extends Model
{
    public $fillable = ['name', 'slug', 'is_active'];

    /**
    * Store new data into DB
    *
    * @param $about Array (
    *   string title
    *   text content
    *   string opening_hour
    *   string reservation_info
    *   string promo
    *   string contact_person
    * @return DB response
    * )
    */
    public static function insertAbout($about)
    {
        PageManager::insertAbout($about);
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
        PageManager::insertFaqCategory($faqCategory);
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
        PageManager::insertFaq($faq);
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
        PageManager::insertPromo($promo);
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
        PageManager::insertHowtoorderCategory($howtoorder_category);
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
        PageManager::insertHowtoorder($howtoorder);
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
        PageManager::insertDesclaimer($desclaimer);
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
        PageManager::insertPrivacy($privacy);
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
        PageManager::insertTerm($term);
    }
}
