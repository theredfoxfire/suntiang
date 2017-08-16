<?php

use Illuminate\Database\Seeder;
use App\Model\CategoryProductPivot;

class CategoryProductPivotTableSeeder extends Seeder
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
                'category_id' => 1,
                'product_id' => 1,
            ],
            [
                'category_id' => 1,
                'product_id' => 2,
            ],
            [
                'category_id' => 1,
                'product_id' => 3,
            ],
            [
                'category_id' => 2,
                'product_id' => 1,
            ],
            [
                'category_id' => 2,
                'product_id' => 2,
            ],
        ];

        foreach ($roles as $key => $value) {
        	CategoryProductPivot::create($value);
        }
    }
}
