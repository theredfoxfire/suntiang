<?php

use Illuminate\Database\Seeder;
use App\ItemImages;

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
                'name' => 'amet.jpg',
            ],
            [
                'id' => 2,
                'item_id' => 1,
                'name' => 'risus.jpg',
            ],
            [
                'id' => 3,
                'item_id' => 2,
                'name' => 'ligula.jpg',
            ],
        ];

        foreach ($permission as $key => $value) {
            ItemImages::create($value);
        }
    }
}
