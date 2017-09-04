<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    public $fillable = ['title', 'description', 'sort', 'is_active'];
}
