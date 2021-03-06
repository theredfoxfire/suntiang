<?php

use Illuminate\Database\Seeder;
use App\Model\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'super-user',
                'display_name' => 'Super User',
                'description' => 'Fermentum tempus,
                    ante nisi pretium orci, at iaculis justo arcu id nulla.
                    Duis varius ultrices mollis',
            ],
            [
                'id' => 2,
                'name' => 'user-level-1',
                'display_name' => 'User Level 1',
                'description' => 'Nullam lacinia sem neque, dignissim euismod odio facilisis non',
            ],
            [
                'id' => 3,
                'name' => 'user-level-2',
                'display_name' => 'User Level 2',
                'description' => 'Pellentesque sagittis, ligula quis tincidunt mattis,
                    neque justo vehicula velit, a elementum eros metus sit amet magna',
            ],
        ];

        foreach ($roles as $key => $value) {
            $role = new Role();
            $role->id = $value['id'];
            $role->name = $value['name'];
            $role->display_name = $value['display_name'];
            $role->description = $value['description'];
            $role->save();
        }
    }
}
