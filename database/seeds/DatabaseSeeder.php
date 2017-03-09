<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run()
    {
        Model::unguard();

        $this->call('PostTableSeeder');
        $this->call('ItemTableSeeder');
        $this->call('PermissionTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('PermissionRoleTableSeeder');
    }

}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Post::truncate();

        factory(App\Post::class, 20)->create();
    }
}
