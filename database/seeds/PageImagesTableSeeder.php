<?php

use Illuminate\Database\Seeder;
use App\PageImages;

class PageImagesTableSeeder extends Seeder
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
        		'page_id' => 1,
                'name' => 'image1.jpg',
        	],
            [
                'id' => 2,
        		'page_id' => 1,
                'name' => 'image2.jpg',
        	],
        ];

        foreach ($permission as $key => $value) {
        	PageImages::create($value);
        }
    }
}
