<?php

use Illuminate\Database\Seeder;
use App\Model\ItemImages;

class ItemImagesTableSeeder extends Seeder
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
                'name' => 'food.png',
            ],
            [
                'id' => 2,
                'item_id' => 2,
                'name' => 'food.png',
            ],
            [
                'id' => 3,
                'item_id' => 3,
                'name' => 'food.png',
            ],
            [
                'id' => 4,
                'item_id' => 4,
                'name' => 'food.png',
            ],
            [
                'id' => 5,
                'item_id' => 5,
                'name' => 'food.png',
            ],[
                'id' => 6,
                'item_id' => 6,
                'name' => 'food.png',
            ],[
                'id' => 7,
                'item_id' => 7,
                'name' => 'food.png',
            ],[
                'id' => 8,
                'item_id' => 8,
                'name' => 'food.png',
            ],[
                'id' => 9,
                'item_id' => 9,
                'name' => 'food.png',
            ],[
                'id' => 10,
                'item_id' => 10,
                'name' => 'food.png',
            ],[
                'id' => 11,
                'item_id' => 11,
                'name' => 'food.png',
            ],[
                'id' => 12,
                'item_id' => 12,
                'name' => 'food.png',
            ],[
                'id' => 13,
                'item_id' => 13,
                'name' => 'food.png',
            ],[
                'id' => 14,
                'item_id' => 14,
                'name' => 'food.png',
            ],[
                'id' => 15,
                'item_id' => 15,
                'name' => 'food.png',
            ],[
                'id' => 16,
                'item_id' => 16,
                'name' => 'food.png',
            ],[
                'id' => 17,
                'item_id' => 17,
                'name' => 'food.png',
            ],[
                'id' => 18,
                'item_id' => 18,
                'name' => 'food.png',
            ],[
                'id' => 19,
                'item_id' => 19,
                'name' => 'food.png',
            ],[
                'id' => 20,
                'item_id' => 20,
                'name' => 'food.png',
            ],[
                'id' => 21,
                'item_id' => 21,
                'name' => 'food.png',
            ],[
                'id' => 22,
                'item_id' => 22,
                'name' => 'food.png',
            ],[
                'id' => 23,
                'item_id' => 23,
                'name' => 'food.png',
            ],[
                'id' => 24,
                'item_id' => 24,
                'name' => 'food.png',
            ],
        ];

        foreach ($permission as $key => $value) {
            ItemImages::create($value);
        }
    }
}
