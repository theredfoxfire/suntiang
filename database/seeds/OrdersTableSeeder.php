<?php
use Illuminate\Database\Seeder;
use App\Orders;

class OrdersTableSeeder extends Seeder
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
                'member_id' => 1,
                'delivery_id' => 1,
                'payment_id' => 1,
                'total_cost' => 20000,
                'is_canceled' => 0,
            ],
            [
                'id' => 2,
                'member_id' => 1,
                'delivery_id' => 2,
                'payment_id' => 2,
                'total_cost' => 26000,
                'is_canceled' => 0,
            ],
        ];

        foreach ($permission as $key => $value) {
        	Orders::create($value);
        }
    }
}
