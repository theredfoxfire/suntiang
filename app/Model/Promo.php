<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public $fillable = ['image', 'description', 'is_active'];
}
