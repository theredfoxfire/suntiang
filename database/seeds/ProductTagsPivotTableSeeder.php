<?php

use Illuminate\Database\Seeder;
use App\ProductTagsPivot;

class ProductTagsPivotTableSeeder extends Seeder
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
                'tag_id' => 1,
                'product_id' => 1,
            ],
            [
                'tag_id' => 1,
                'product_id' => 2,
            ],
            [
                'tag_id' => 1,
                'product_id' => 3,
            ],
            [
                'tag_id' => 2,
                'product_id' => 1,
            ],
            [
                'tag_id' => 2,
                'product_id' => 2,
            ],
        ];

        foreach ($permission as $key => $value) {
        	ProductTagsPivot::create($value);
        }
    }
}
