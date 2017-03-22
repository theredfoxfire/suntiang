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
        	],
        	[
                'id' => 2,
        		'name' => 'Cost 2',
        	],
        	[
                'id' => 3,
        		'name' => 'Cost 3',
        	],
        ];

        foreach ($permission as $key => $value) {
        	ShippingCost::create($value);
        }
    }
}
