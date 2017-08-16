<?php

use Illuminate\Database\Seeder;
use App\Model\AdditionalProductPivot;

class AdditionalProductPivotTableSeeder extends Seeder
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
                'product_id' => 1,
            ],
            [
                'item_id' => 1,
                'product_id' => 2,
            ],
            [
                'item_id' => 1,
                'product_id' => 3,
            ],
            [
                'item_id' => 2,
                'product_id' => 1,
            ],
            [
                'item_id' => 2,
                'product_id' => 2,
            ],
        ];

        foreach ($roles as $key => $value) {
        	AdditionalProductPivot::create($value);
        }
    }
}
