<?php

use Illuminate\Database\Seeder;
use App\PageFields;

class PageFieldsTableSeeder extends Seeder
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
                'field_name' => 'phone',
                'field_content' => '6289373838',
                'field_order' => 1,
                'is_active' => 1,
        	],
            [
                'id' => 2,
        		'page_id' => 1,
                'field_name' => 'email',
                'field_content' => 'contact@me.com',
                'field_order' => 2,
                'is_active' => 1,
        	],
        ];

        foreach ($permission as $key => $value) {
        	PageFields::create($value);
        }
    }
}
