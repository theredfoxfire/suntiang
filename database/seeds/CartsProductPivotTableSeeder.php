<?php

use Illuminate\Database\Seeder;
use App\CartsProductPivot;

class CartsProductPivotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'item_id' => 1,
                'cart_id' => 1,
            ],
            [
                'item_id' => 1,
                'cart_id' => 2,
            ],
            [
                'item_id' => 1,
                'cart_id' => 3,
            ],
            [
                'item_id' => 2,
                'cart_id' => 1,
            ],
            [
                'item_id' => 2,
                'cart_id' => 2,
            ],
        ];

        foreach ($roles as $key => $value) {
        	CartsProductPivot::create($value);
        }
    }
}
