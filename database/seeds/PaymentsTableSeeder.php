<?php
use Illuminate\Database\Seeder;
use App\Model\Payments;

class PaymentsTableSeeder extends Seeder
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
                'order_id' => 1,
                'amount' => 26000,
                'payment_method' => 1,
                'payment_status' => 1,
            ],
            [
                'id' => 2,
                'order_id' => 2,
                'amount' => 26000,
                'payment_method' => 1,
                'payment_status' => 1,
            ],
            [
                'id' => 3,
                'order_id' => 3,
                'amount' => 26000,
                'payment_method' => 1,
                'payment_status' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	Payments::create($value);
        }
    }
}
