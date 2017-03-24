<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    public $fillable = ['id', 'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity'];
}