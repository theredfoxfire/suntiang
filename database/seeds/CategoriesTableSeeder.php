<?php
use Illuminate\Database\Seeder;
use App\Model\Categories;

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
                'id' => 18,
        		'name' => 'Karbohidrat',
                'group' => 'isi',
                'parent_id' => 0,
        	],
            [
                'id' => 19,
        		'name' => 'Lauk',
                'group' => 'isi',
                'parent_id' => 0,
        	],
            [
                'id' => 3,
        		'name' => 'Sayuran',
                'group' => 'isi',
                'parent_id' => 1,
        	],
            [
                'id' => 4,
        		'name' => 'Protein',
                'group' => 'isi',
                'parent_id' => 2,
        	],
            [
                'id' => 5,
        		'name' => 'Appetizier',
                'group' => 'jenis',
                'parent_id' => 3,
        	],
            [
                'id' => 6,
        		'name' => 'Soup',
                'group' => 'jenis',
                'parent_id' => 4,
        	],
            [
                'id' => 7,
        		'name' => 'Salad',
                'group' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 8,
        		'name' => 'Maincorse',
                'group' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 9,
        		'name' => 'Condiment',
                'group' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 10,
        		'name' => 'Dessert',
                'group' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 11,
        		'name' => 'Sunda',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 12,
        		'name' => 'Jawa',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 13,
        		'name' => 'Sumatra',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 14,
        		'name' => 'Italia',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 15,
        		'name' => 'Eropa',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 16,
        		'name' => 'Asia',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 17,
        		'name' => 'Arab',
                'group' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 1,
        		'name' => 'Daily Meal',
                'group' => 'utama',
                'parent_id' => 0,
        	],
            [
                'id' => 2,
        		'name' => 'Catering',
                'group' => 'utama',
                'parent_id' => 0,
        	],
        ];

        foreach ($permission as $key => $value) {
        	Categories::create($value);
        }
    }
}
