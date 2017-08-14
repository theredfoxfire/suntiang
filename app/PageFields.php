<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class PageFields extends Model
{
    public $fillable = ['page_id', 'field_name', 'field_content', 'field_order', 'is_active'];
}
