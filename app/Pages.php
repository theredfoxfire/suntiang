<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    public $fillable = ['name', 'slug', 'is_active'];
}
