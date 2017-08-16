<?php

use Illuminate\Database\Seeder;
use App\Model\ProductItemsPivot;

class ProductItemsPivotTableSeeder extends Seeder
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
                'items_id' => 1,
                'product_id' => 1,
            ],
            [
                'items_id' => 1,
                'product_id' => 2,
            ],
            [
                'items_id' => 1,
                'product_id' => 3,
            ],
            [
                'items_id' => 2,
                'product_id' => 1,
            ],
            [
                'items_id' => 2,
                'product_id' => 2,
            ],
        ];

        foreach ($roles as $key => $value) {
        	ProductItemsPivot::create($value);
        }
    }
}
