<?php
use Illuminate\Database\Seeder;
use App\Deliveries;

class DeliveriesTableSeeder extends Seeder
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
                'order_id' => 1,
                'district_id' => 1,
                'postal_code' => 123456,
                'delivery_status' => 1,
                'delivery_time' => 1,
                'delivery_receiver' => 'dann abarmov',
                'delivery_receiver_phone' => '627383930993',
                'delivery_address' => 'jl jali-jali jogjakarta',
                'delivery_date' => '2017-3-23 12:43:21',
            ],
            [
                'order_id' => 2,
                'district_id' => 1,
                'postal_code' => 123456,
                'delivery_status' => 1,
                'delivery_time' => 2,
                'delivery_receiver' => 'dann abarmov',
                'delivery_receiver_phone' => '627383930993',
                'delivery_address' => 'jl jali-jali jogjakarta',
                'delivery_date' => '2017-3-23 12:43:21',
            ],
            [
                'order_id' => 3,
                'district_id' => 1,
                'postal_code' => 123456,
                'delivery_status' => 1,
                'delivery_time' => 1,
                'delivery_receiver' => 'dann abarmov',
                'delivery_receiver_phone' => '627383930993',
                'delivery_address' => 'jl jali-jali jogjakarta',
                'delivery_date' => '2017-3-23 12:43:21',
            ],
        ];

        foreach ($permission as $key => $value) {
        	Deliveries::create($value);
        }
    }
}
