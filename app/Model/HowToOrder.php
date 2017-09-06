<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\HowManager;
use App\Services\PaginatorManager;

class HowToOrder extends Model
{
    public $fillable = ['category_id', 'title', 'description', 'step', 'is_active'];

    public static function getHowCategory()
    {
        return HowManager::getHowCategory();
    }

    public static function getHowByCategory($id)
    {
        return HowManager::getHowByCategory($id);
    }

    public static function indexHow()
    {
        return PaginatorManager::paginate(HowManager::indexHow());
    }
}
