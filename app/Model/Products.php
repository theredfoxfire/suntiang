<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $fillable = ['name', 'description', 'price', 'is_special', 'day', 'available_date'];
}
