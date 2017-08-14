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
        $this->call('AdditionalProductPivotTableSeeder');
        $this->call('CartsProductPivotTableSeeder');
        $this->call('CartsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('CategoryProductPivotTableSeeder');
        $this->call('CouriersTableSeeder');
        $this->call('DeliveriesTableSeeder');
        $this->call('DeliveryTrackingsTableSeeder');
        $this->call('ItemImagesTableSeeder');
        $this->call('ItemTableSeeder');
        $this->call('MembersTableSeeder');
        $this->call('OrderDetailTableSeeder');
        $this->call('OrdersTableSeeder');
        $this->call('PaymentsTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('PermissionTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('PermissionRoleTableSeeder');
        $this->call('ProductImagesTableSeeder');
        $this->call('CategoryItemPivotTableSeeder');
        $this->call('ProductsTableSeeder');
        $this->call('ProductTagsPivotTableSeeder');
        $this->call('PromotionsTableSeeder');
        $this->call('RoleUserTableSeeder');
        $this->call('SessionsTableSeeder');
        $this->call('ShippingCostsTableSeeder');
        $this->call('SlidersTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('PagesTableSeeder');
        $this->call('PageImagesTableSeeder');
        $this->call('PageFieldsTableSeeder');
        $this->call('TagTableSeeder');
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
