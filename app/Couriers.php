<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Couriers extends Model
{
    public $fillable = ['name', 'photo', 'phone', 'email'];
}
