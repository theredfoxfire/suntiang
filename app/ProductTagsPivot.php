<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTagsPivot extends Model
{
    public $fillable = ['tag_id', 'product_id'];
}
