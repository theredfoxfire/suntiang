<?php

use Illuminate\Database\Seeder;
use App\Model\CategoryItemPivot;

class CategoryItemPivotTableSeeder extends Seeder
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
                'categories_id' => 1,
                'item_id' => 1,
            ],
            [
                'categories_id' => 2,
                'item_id' => 2,
            ],
            [
                'categories_id' => 3,
                'item_id' => 3,
            ],
            [
                'categories_id' => 4,
                'item_id' => 4,
            ],
            [
                'categories_id' => 19,
                'item_id' => 5,
            ],
            [
                'categories_id' => 18,
                'item_id' => 6,
            ],
            [
                'categories_id' => 1,
                'item_id' => 7,
            ],
            [
                'categories_id' => 2,
                'item_id' => 8,
            ],
            [
                'categories_id' => 3,
                'item_id' => 9,
            ],
            [
                'categories_id' => 4,
                'item_id' => 10,
            ],
            [
                'categories_id' => 5,
                'item_id' => 11,
            ],
            [
                'categories_id' => 6,
                'item_id' => 12,
            ],
            [
                'categories_id' => 1,
                'item_id' => 13,
            ],
            [
                'categories_id' => 2,
                'item_id' => 14,
            ],
            [
                'categories_id' => 3,
                'item_id' => 15,
            ],
            [
                'categories_id' => 4,
                'item_id' => 16,
            ],
            [
                'categories_id' => 5,
                'item_id' => 17,
            ],
            [
                'categories_id' => 6,
                'item_id' => 18,
            ],
            [
                'categories_id' => 1,
                'item_id' => 19,
            ],
            [
                'categories_id' => 2,
                'item_id' => 20,
            ],
            [
                'categories_id' => 3,
                'item_id' => 21,
            ],
            [
                'categories_id' => 4,
                'item_id' => 22,
            ],
            [
                'categories_id' => 5,
                'item_id' => 23,
            ],
            [
                'categories_id' => 6,
                'item_id' => 24,
            ],
        ];

        foreach ($roles as $key => $value) {
        	CategoryItemPivot::create($value);
        }
    }
}
