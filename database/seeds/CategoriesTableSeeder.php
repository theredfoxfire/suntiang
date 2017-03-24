<?php
use Illuminate\Database\Seeder;
use App\Categories;

class CategoriesTableSeeder extends Seeder
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
        		'name' => 'Cat level 1 a',
                'slug' => 'Cat-level-1-a',
                'description' => 'Cat level 1 a',
                'parent_id' => 0,
                'level' => 1,
        	],
            [
                'id' => 2,
        		'name' => 'Cat level 1 b',
                'slug' => 'Cat-level-1-b',
                'description' => 'Cat level 1 b',
                'parent_id' => 0,
                'level' => 1,
        	],
            [
                'id' => 3,
        		'name' => 'Cat level 2 a',
                'slug' => 'Cat level 2 a',
                'description' => 'Cat level 2 a',
                'parent_id' => 1,
                'level' => 2,
        	],
            [
                'id' => 4,
        		'name' => 'Cat level 2 b',
                'slug' => 'Cat level 2 b',
                'description' => 'Cat level 2 b',
                'parent_id' => 2,
                'level' => 2,
        	],
            [
                'id' => 5,
        		'name' => 'Cat level 3 a',
                'slug' => 'Cat level 3 a',
                'description' => 'Cat level 3 a',
                'parent_id' => 3,
                'level' => 3,
        	],
            [
                'id' => 6,
        		'name' => 'Cat level 3 b',
                'slug' => 'Cat level 3 b',
                'description' => 'Cat level 3 b',
                'parent_id' => 4,
                'level' => 3,
        	],
        ];

        foreach ($permission as $key => $value) {
        	Categories::create($value);
        }
    }
}
