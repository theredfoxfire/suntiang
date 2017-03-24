<?php

use Illuminate\Database\Seeder;
use App\ProductImages;

class ProductImagesTableSeeder extends Seeder
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
                'product_id' => 1,
                'name' => 'amet.jpg',
            ],
            [
                'id' => 2,
                'product_id' => 1,
                'name' => 'risus.jpg',
            ],
            [
                'id' => 3,
                'product_id' => 2,
                'name' => 'ligula.jpg',
            ],
        ];

        foreach ($permission as $key => $value) {
            ProductImages::create($value);
        }
    }
}
