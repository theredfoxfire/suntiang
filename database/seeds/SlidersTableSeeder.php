<?php
use Illuminate\Database\Seeder;
use App\Model\Sliders;

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
        		'title' => 'Sliders 1',
                'file' => 'slide.jpg',
        	],
        	[
                'id' => 2,
        		'title' => 'Sliders 2',
                'file' => 'slide.jpg',
        	],
        	[
                'id' => 3,
        		'title' => 'Sliders 3',
                'file' => 'slide.jpg',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Sliders::create($value);
        }
    }
}
