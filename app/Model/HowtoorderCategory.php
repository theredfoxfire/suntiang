<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HowtoorderCategory extends Model
{
    public $fillable = ['name', 'description', 'is_active'];
}
