<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@imajikudev.com',
                'password' => Hash::make('adminpass'),
                'remember_token' => str_random(10),
            ],
            [
                'id' => 2,
                'name' => 'Front',
                'email' => 'front@imajikudev.com',
                'password' => Hash::make('frontpass'),
                'remember_token' => str_random(10),
            ],
        ];

        foreach ($permission as $key => $value) {
            User::create($value);
        }
    }
}
