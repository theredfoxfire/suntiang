<?php

use Illuminate\Database\Seeder;
use App\Model\Item;

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
                'name' => 'dolor sit ametqw',
                'type' => 'package',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],
            [
                'name' => 'adipiscing eliter',
                'type' => 'package',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],
            [
                'name' => 'Fusce nec risus non ligula auctorqa',
                'type' => 'package',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],[
                'name' => 'Lorem ipsum dolor sit amet3',
                'type' => 'package',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],
            [
                'name' => 'Consectetur adipiscing elit3',
                'type' => 'package',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],
            [
                'name' => 'Fusce nec risus non ligula auctor3',
                'type' => 'package',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],[
                'name' => 'Lorem ipsum dolor sit amet4',
                'type' => 'package',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_condiment' => 1,

            ],
            [
                'name' => 'Consectetur adipiscing elitera',
                'type' => 'package',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 0,
                'is_drink' => 1,


            ],
            [
                'name' => 'Fusce nec risus non ligula auctorwqx',
                'type' => 'item',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,
                'is_drink' => 1,


            ],[
                'name' => 'Lorem ipsum dolor sit ametty',
                'type' => 'item',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,
                'is_drink' => 1,


            ],
            [
                'name' => 'Consectetur adipiscing elithg',
                'type' => 'item',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,
                'is_drink' => 1,


            ],
            [
                'name' => 'Fusce nec risus non ligula auctorjh',
                'type' => 'item',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,
                'is_drink' => 1,


            ],[
                'name' => 'Lorem ipsum dolor sit ametdf',
                'type' => 'item',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,
                'is_drink' => 1,


            ],
            [
                'name' => 'Consectetur adipiscing elitjhj',
                'type' => 'item',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Fusce nec risus non ligula auctorjnc',
                'type' => 'item',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],[
                'name' => 'Lorem ipsum dolor sit ametlp',
                'type' => 'item',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Consectetur adipiscing elituy',
                'type' => 'item',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Fusce nec risus non ligula auctoryh',
                'type' => 'item',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],[
                'name' => 'Lorem ipsum dolor sit ametmn',
                'type' => 'item',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Consectetur adipiscing elitvg',
                'type' => 'item',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Fusce nec risus non ligula auctortr',
                'type' => 'item',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],[
                'name' => 'Lorem ipsum dolor sit ametdf',
                'type' => 'item',
                'description' => 'Morbi blandit, neque eget fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Consectetur adipiscing elithd',
                'type' => 'item',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
            [
                'name' => 'Fusce nec risus non ligula auctorcv',
                'type' => 'item',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
                'daily_price' => 12000,
                'condiment_price' => 12000,
                'catering_price_50' => 70000,
                'catering_price_75' => 90000,
                'catering_price_100' => 120000,
                'is_active' => 1,


            ],
        ];

        foreach ($permission as $key => $value) {
            Item::create($value);
        }
    }
}
