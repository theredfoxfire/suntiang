<?php
use Illuminate\Database\Seeder;
use App\Model\Promotions;

class PromotionsTableSeeder extends Seeder
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
        		'name' => 'Promotions 1',
        	],
        	[
                'id' => 2,
        		'name' => 'Promotions 2',
        	],
        	[
                'id' => 3,
        		'name' => 'Promotions 3',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Promotions::create($value);
        }
    }
}
