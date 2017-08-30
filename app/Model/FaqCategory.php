<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\PageManager;

class FaqCategory extends Model
{
    public $fillable = ['name', 'description', 'is_active'];
}
