<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeliveryTrackings extends Model
{
    public $fillable = [
        'user_id',
        'delivery_id',
        'courier_id',
        'refference_id',
        'tracking_status',
        'current_position',
        'additional_note',
    ];
}
