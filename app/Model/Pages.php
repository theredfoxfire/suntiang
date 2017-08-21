<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\PageManager;

class Pages extends Model
{
    public $fillable = ['name', 'slug', 'is_active'];

    /**
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
    public function insertAbout($about)
    {
        PageManager::insertAbout($about);
    }
}
