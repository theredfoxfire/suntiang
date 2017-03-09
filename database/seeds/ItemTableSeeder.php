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
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
            ],
            [
                'name' => 'Consectetur adipiscing elit',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
            ],
            [
                'name' => 'Fusce nec risus non ligula auctor',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
            ],
        ];

        foreach ($permission as $key => $value) {
            Item::create($value);
        }
    }
}
