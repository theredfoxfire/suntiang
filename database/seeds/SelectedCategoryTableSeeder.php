<?php
use Illuminate\Database\Seeder;
use App\Model\SelectedCategory;

class SelectedCategoryTableSeeder extends Seeder
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
        		'category_id' => '3',
        	],
        	[
                'id' => 2,
        		'category_id' => '3',
        	],
        	[
                'id' => 3,
        		'category_id' => '3',
        	],
        	[
                'id' => 4,
        		'category_id' => '4',
        	],
        	[
                'id' => 5,
        		'category_id' => '5',
        	],
        	[
                'id' => 6,
        		'category_id' => '6',
        	],
        ];

        foreach ($permission as $key => $value) {
        	SelectedCategory::create($value);
        }
    }
}
