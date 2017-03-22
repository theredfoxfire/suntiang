<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $fillable = ['name', 'slug', 'description', 'parent_id', 'level'];
}
