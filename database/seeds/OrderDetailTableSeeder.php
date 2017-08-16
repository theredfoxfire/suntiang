<?php
use Illuminate\Database\Seeder;
use App\Model\OrderDetail;

class OrderDetailTableSeeder extends Seeder
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
                'item_id' => 1,
                'order_id' => 1,
                'quantity' => 200,
                'total_cost' => 20000,
                'is_canceled' => 0,
            ],
            [
                'id' => 2,
                'item_id' => 2,
                'order_id' => 1,
                'quantity' => 10,
                'total_cost' => 30000,
                'is_canceled' => 0,
            ],
        ];

        foreach ($permission as $key => $value) {
        	OrderDetail::create($value);
        }
    }
}
