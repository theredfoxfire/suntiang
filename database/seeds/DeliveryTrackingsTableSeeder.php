<?php
use Illuminate\Database\Seeder;
use App\Model\DeliveryTrackings;

class DeliveryTrackingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'id' => 1,
                'user_id' => 1,
                'delivery_id' => 1,
                'courier_id' => 1,
                'refference_id' => 0,
                'tracking_status' => 1,
                'current_position' => 'Position position',
                'additional_note' => 'Additional note',
            ],
        	[
                'id' => 2,
                'user_id' => 1,
                'delivery_id' => 1,
                'courier_id' => 1,
                'refference_id' => 1,
                'tracking_status' => 1,
                'current_position' => 'Position position',
                'additional_note' => 'Additional note',
        	],
        	[
                'id' => 3,
                'user_id' => 1,
                'delivery_id' => 1,
                'courier_id' => 1,
                'refference_id' => 2,
                'tracking_status' => 1,
                'current_position' => 'Position position',
                'additional_note' => 'Additional note',
        	],
        ];

        foreach ($permission as $key => $value) {
        	DeliveryTrackings::create($value);
        }
    }
}
