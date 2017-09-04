<?php
use Illuminate\Database\Seeder;
use App\Model\FaqCategory;

class FaqCategoryTableSeeder extends Seeder
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
                'name' => 'General Question',
                'description' => "Nope is just general",
                'is_active' => 1,
            ],
            [
                'name' => 'Product',
                'description' => "Nope is just product",
                'is_active' => 1,
            ],
            [
                'name' => 'Ordering',
                'description' => "Nope is just order",
                'is_active' => 1,
            ],
        ];

        foreach ($permission as $key => $value) {
        	FaqCategory::create($value);
        }
    }
}
