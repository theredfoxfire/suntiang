<?php
use Illuminate\Database\Seeder;
use App\Model\Pages;

class FaqTableSeeder extends Seeder
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
                'question' => 'How to make a sandwich',
                'answer' => "I don't know neither",
                'is_active' => 1
            ],
            [
                'category_id' => 1,
                'question' => 'How to make a sandwich',
                'answer' => "I don't know neither",
                'is_active' => 1
            ],
            [
                'category_id' => 2,
                'question' => 'How to make a sandwich',
                'answer' => "I don't know neither",
                'is_active' => 1
            ],
            [
                'category_id' => 2,
                'question' => 'How to make a sandwich',
                'answer' => "I don't know neither",
                'is_active' => 1
            ],
            [
                'category_id' => 3,
                'question' => 'How to make a sandwich',
                'answer' => "I don't know neither",
                'is_active' => 1
            ],
            [
                'category_id' => 3,
                'question' => 'How to make a sandwich',
                'answer' => "I don't know neither",
                'is_active' => 1
            ],
        ];

        foreach ($permission as $key => $value) {
        	Pages::insertFaq($value);
        }
    }
}
