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
                'type' => 'isi',
                'parent_id' => 0,
        	],
            [
                'id' => 19,
        		'name' => 'Lauk',
                'type' => 'isi',
                'parent_id' => 0,
        	],
            [
                'id' => 3,
        		'name' => 'Sayuran',
                'type' => 'isi',
                'parent_id' => 1,
        	],
            [
                'id' => 4,
        		'name' => 'Protein',
                'type' => 'isi',
                'parent_id' => 2,
        	],
            [
                'id' => 5,
        		'name' => 'Appetizier',
                'type' => 'jenis',
                'parent_id' => 3,
        	],
            [
                'id' => 6,
        		'name' => 'Soup',
                'type' => 'jenis',
                'parent_id' => 4,
        	],
            [
                'id' => 7,
        		'name' => 'Salad',
                'type' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 8,
        		'name' => 'Maincorse',
                'type' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 9,
        		'name' => 'Condiment',
                'type' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 10,
        		'name' => 'Dessert',
                'type' => 'jenis',
                'parent_id' => 0,
        	],
            [
                'id' => 11,
        		'name' => 'Sunda',
                'type' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 12,
        		'name' => 'Jawa',
                'type' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 13,
        		'name' => 'Sumatra',
                'type' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 14,
        		'name' => 'Italia',
                'type' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 15,
        		'name' => 'Eropa',
                'type' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 16,
        		'name' => 'Asia',
                'type' => 'region',
                'parent_id' => 0,
        	],
            [
                'id' => 17,
        		'name' => 'Arab',
                'type' => 'region',
                'parent_id' => 0,
        	],
        ];

        foreach ($permission as $key => $value) {
        	Categories::create($value);
        }
    }
}
