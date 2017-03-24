<?php
use Illuminate\Database\Seeder;
use App\ShippingCost;

class ShippingCostTableSeeder extends Seeder
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
        		'name' => 'Cost 1',
                'fare' => 1000,
        	],
        	[
                'id' => 2,
        		'name' => 'Cost 2',
                'fare' => 2000,
        	],
        	[
                'id' => 3,
        		'name' => 'Cost 3',
                'fare' => 4000,
        	],
        ];

        foreach ($permission as $key => $value) {
        	ShippingCost::create($value);
        }
    }
}
