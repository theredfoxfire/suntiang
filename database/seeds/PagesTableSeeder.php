<?php
use Illuminate\Database\Seeder;
use App\Pages;

class PagesTableSeeder extends Seeder
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
        		'name' => 'Contact Us',
                'is_active' => 1,
                'slug' => 'contact-us',
        	],
        	[
                'id' => 2,
                'name' => 'How To',
                'is_active' => 1,
                'slug' => 'how-to',
        	],
        	[
                'id' => 3,
                'name' => 'Privacy & Policy',
                'is_active' => 1,
                'slug' => 'privacy-policy',
        	],
        	[
                'id' => 4,
                'name' => 'About Us',
                'is_active' => 1,
                'slug' => 'about-us',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Pages::create($value);
        }
    }
}
