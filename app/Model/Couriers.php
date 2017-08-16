<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Couriers extends Model
{
    public $fillable = ['name', 'photo', 'phone', 'email'];
}
