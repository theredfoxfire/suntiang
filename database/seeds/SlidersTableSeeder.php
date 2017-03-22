<?php
use Illuminate\Database\Seeder;
use App\Sliders;

class SlidersTableSeeder extends Seeder
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
        		'name' => 'Sliders 1',
        	],
        	[
                'id' => 2,
        		'name' => 'Sliders 2',
        	],
        	[
                'id' => 3,
        		'name' => 'Sliders 3',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Sliders::create($value);
        }
    }
}
