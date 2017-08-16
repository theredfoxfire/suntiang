<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    public $fillable = ['name', 'slug', 'is_active'];
}
