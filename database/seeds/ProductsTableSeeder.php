<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsTableSeeder extends Seeder
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
                'price' => 12000,
                'is_special' => 1,
                'day' => 1,
                'available_date' => '2017-10-26 13:21:22',
            ],
            [
                'name' => 'Consectetur adipiscing elit',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'price' => 12000,
                'is_special' => 1,
                'day' => 1,
                'available_date' => '2017-10-26 13:21:22',
            ],
            [
                'name' => 'Fusce nec risus non ligula auctor',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'price' => 12000,
                'is_special' => 1,
                'day' => 1,
                'available_date' => '2017-10-26 13:21:22',
            ],
        ];

        foreach ($permission as $key => $value) {
            Products::create($value);
        }
    }
}
