<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemTableSeeder extends Seeder
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
                'title' => 'role-list',
                'description' => 'Display Role Listing',
            ],
            [
                'title' => 'manager',
                'description' => 'Manager',
            ],
            [
                'title' => 'supervisor',
                'description' => 'Supervisor',
            ],
        ];

        foreach ($permission as $key => $value) {
            Item::create($value);
        }
    }
}
