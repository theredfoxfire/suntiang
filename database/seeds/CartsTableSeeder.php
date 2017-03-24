<?php
use Illuminate\Database\Seeder;
use App\Carts;

class CartsTableSeeder extends Seeder
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
        		'session_id' => '123456',
        	],
        	[
                'id' => 2,
        		'session_id' => '7891011',
        	],
        	[
                'id' => 3,
        		'session_id' => '12131415',
        	],
        	[
                'id' => 4,
        		'session_id' => '16171819',
        	],
        	[
                'id' => 5,
        		'session_id' => '2021222324',
        	],
        	[
                'id' => 6,
        		'session_id' => '2526272829',
        	],
        	[
                'id' => 7,
        		'session_id' => '3031323334',
        	],
        	[
                'id' => 8,
        		'session_id' => '3536373839',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Carts::create($value);
        }
    }
}
