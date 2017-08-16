<?php

use Illuminate\Database\Seeder;
use App\Model\Tag;

class TagTableSeeder extends Seeder
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
                'tag' => 'Tag 1',
                'title' => 'Tag 1 Title',
                'subtitle' => 'Tag 1 subtitle',
                'meta_description' => 'Tag 1 meta description',
                'reverse_direction' => 0,
            ],
            [
                'id' => 2,
                'tag' => 'Tag 2',
                'title' => 'Tag 2 Title',
                'subtitle' => 'Tag 2 subtitle',
                'meta_description' => 'Tag 2 meta description',
                'reverse_direction' => 0,
            ],
            [
                'id' => 3,
                'tag' => 'Tag 3',
                'title' => 'Tag 3 Title',
                'subtitle' => 'Tag 3 subtitle',
                'meta_description' => 'Tag 3 meta description',
                'reverse_direction' => 0,
            ],
        ];

        foreach ($permission as $key => $value) {
            Tag::create($value);
        }
    }
}
