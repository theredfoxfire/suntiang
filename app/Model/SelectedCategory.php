<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\CategoryManager;

class SelectedCategory extends Model
{
    public $fillable = ['category_id', 'note'];

    /**
    * Get selected category data
    * @return category Object
    */
    public static function getSelectedCategory()
    {
        return CategoryManager::getSelectedCategory();
    }
}
