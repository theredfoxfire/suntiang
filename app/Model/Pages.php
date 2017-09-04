<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\PageManager;
use App\Services\PaginatorManager;

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
    * Listing About
    */
    public static function indexAbout()
    {
        return PageManager::indexAbout();
    }
    /**
    * Get single About
    */
    public static function getAbout($id)
    {
        return PageManager::getAbout($id);
    }
    /**
    * Update About Data
    */
    public static function updateAbout($id, $data)
    {
        return PageManager::updateAbout($id, $data);
    }
    /**
    * Listing Faq
    */
    public static function indexFaq()
    {
        return PaginatorManager::paginate(PageManager::indexFaq());
    }
    /**
    * Get single Faq
    */
    public static function getFaq($id)
    {
        return PageManager::getFaq($id);
    }
    /**
    * Update Faq Data
    */
    public static function updateFaq($id, $data)
    {
        return PageManager::updateFaq($id, $data);
    }
    /**
    * Delete Faq Data
    */
    public static function deleteFaq($id)
    {
        return PageManager::deleteFaq($id);
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
}
