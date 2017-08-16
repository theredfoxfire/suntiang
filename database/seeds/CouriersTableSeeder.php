<?php
use Illuminate\Database\Seeder;
use App\Model\Couriers;

class CouriersTableSeeder extends Seeder
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
                'name' => 'Jono',
                'photo' => 'jono.jpg',
                'phone' => '62344434733',
                'email' => 'jono@gmail.com',
            ],
        	[
                'id' => 2,
                'name' => 'Juki',
                'photo' => 'juki.jpg',
                'phone' => '62344884733',
                'email' => 'juki@gmail.com',
        	],
        	[
                'id' => 3,
                'name' => 'Jane',
                'photo' => 'jane.jpg',
                'phone' => '62344374633',
                'email' => 'jane@gmail.com',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Couriers::create($value);
        }
    }
}
