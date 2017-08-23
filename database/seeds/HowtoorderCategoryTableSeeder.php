<?php
use Illuminate\Database\Seeder;
use App\Model\Pages;

class HowtoorderCategoryTableSeeder extends Seeder
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
                'name' => 'Daily meal',
                'description' => "Nope is just general",
                'is_active' => 1,
            ],
            [
                'name' => 'Catering',
                'description' => "Nope is just product",
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	Pages::insertHowtoorderCategory($value);
        }
    }
}
