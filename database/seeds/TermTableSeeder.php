<?php
use Illuminate\Database\Seeder;
use App\Model\Pages;

class TermTableSeeder extends Seeder
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
                'title' => "Hyperlink",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'sort' => 1,
                'is_active' => 1,
            ],
            [
                'title' => "Schedule Appointment",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'sort' => 2,
                'is_active' => 1,
            ],
            [
                'title' => "Select Product",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'sort' => 3,
                'is_active' => 1,
            ],
            [
                'title' => "Select your customization option",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'sort' => 4,
                'is_active' => 1,
            ],
            [
                'title' => "Add to Cart",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'sort' => 5,
                'is_active' => 1,
            ],
            [
                'title' => "My Cart",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'sort' => 6,
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	Pages::insertTerm($value);
        }
    }
}
