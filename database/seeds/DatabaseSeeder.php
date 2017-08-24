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
        $this->call('CategoryItemPivotTableSeeder');
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
        $this->call('AboutTableSeeder');
        $this->call('FaqCategoryTableSeeder');
        $this->call('FaqTableSeeder');
        $this->call('HowtoorderCategoryTableSeeder');
        $this->call('HowtoorderTableSeeder');
        $this->call('PromoTableSeeder');
        $this->call('DesclaimerTableSeeder');
        $this->call('PrivacyTableSeeder');
        $this->call('TermTableSeeder');
    }

}

class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Model\Post::truncate();

        factory(App\Model\Post::class, 20)->create();
    }
}
