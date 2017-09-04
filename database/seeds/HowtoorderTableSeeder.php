<?php
use Illuminate\Database\Seeder;
use App\Model\HowToOrder;

class HowtoorderTableSeeder extends Seeder
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
                'category_id' => 1,
                'title' => "Sign In/ Sign up",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'step' => 1,
                'is_active' => 1,
            ],
            [
                'category_id' => 1,
                'title' => "Schedule Appointment",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'step' => 2,
                'is_active' => 1,
            ],
            [
                'category_id' => 1,
                'title' => "Select Product",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'step' => 3,
                'is_active' => 1,
            ],
            [
                'category_id' => 1,
                'title' => "Select your customization option",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'step' => 4,
                'is_active' => 1,
            ],
            [
                'category_id' => 1,
                'title' => "Add to Cart",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'step' => 5,
                'is_active' => 1,
            ],
            [
                'category_id' => 1,
                'title' => "My Cart",
                'description' => "a. Sign in if you are already registered in Bespoka.com
                    b. If you are new to Bespoka, please Register to create your account",
            	'step' => 6,
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	HowToOrder::create($value);
        }
    }
}
