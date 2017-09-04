<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    public $fillable = ['address', 'phone', 'is_active'];
}
