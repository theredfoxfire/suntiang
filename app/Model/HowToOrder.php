<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HowToOrder extends Model
{
    public $fillable = ['category_id', 'title', 'description', 'step', 'is_active'];
}
