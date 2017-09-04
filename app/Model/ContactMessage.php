<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    public $fillable = ['name', 'email', 'subject', 'phone', 'message', 'is_blocked'];
}
