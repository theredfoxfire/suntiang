<?php
use Illuminate\Database\Seeder;
use App\Model\Pages;

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
        		'name' => 'About Us',
                'is_active' => 1,
                'slug' => 'about-us',
        	],
        	[
                'id' => 2,
                'name' => 'FAQ',
                'is_active' => 1,
                'slug' => 'faq',
        	],
        	[
                'id' => 3,
                'name' => 'How To Order',
                'is_active' => 1,
                'slug' => 'how-to-order',
            ],
            [
                'id' => 4,
                'name' => 'Contact Us',
                'is_active' => 1,
                'slug' => 'contact-us',
            ],
            [
                'id' => 5,
                'name' => 'Desclaimer',
                'is_active' => 1,
                'slug' => 'desclaimer',
            ],
            [
                'id' => 6,
                'name' => 'Privacy',
                'is_active' => 1,
                'slug' => 'privacy',
            ],
            [
                'id' => 7,
                'name' => 'Term Of Use',
                'is_active' => 1,
                'slug' => 'privacy-policy',
        	],
        ];

        foreach ($permission as $key => $value) {
        	Pages::create($value);
        }
    }
}
