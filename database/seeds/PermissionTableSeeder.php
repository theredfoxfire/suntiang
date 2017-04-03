<?php
use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
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
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
                'id' => 2,
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
                'id' => 3,
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
                'id' => 4,
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
                'id' => 5,
        		'name' => 'items-list',
        		'display_name' => 'Display Item Listing',
        		'description' => 'See only Listing Of Item'
        	],
        	[
                'id' => 6,
        		'name' => 'items-create',
        		'display_name' => 'Create Item',
        		'description' => 'Create New Item'
        	],
        	[
                'id' => 7,
        		'name' => 'items-edit',
        		'display_name' => 'Edit Item',
        		'description' => 'Edit Item'
        	],
        	[
                'id' => 8,
        		'name' => 'items-delete',
        		'display_name' => 'Delete Item',
        		'description' => 'Delete Item'
        	],
            [
                'id' => 9,
        		'name' => 'carts-list',
        		'display_name' => 'Display carts Listing',
        		'description' => 'See only Listing Of Item'
        	],
            [
                'id' => 10,
        		'name' => 'carts-create',
        		'display_name' => 'Create carts',
        		'description' => 'Create New carts'
        	],
        	[
                'id' => 11,
        		'name' => 'carts-edit',
        		'display_name' => 'Edit carts',
        		'description' => 'Edit carts'
        	],
        	[
                'id' => 12,
        		'name' => 'carts-delete',
        		'display_name' => 'Delete carts',
        		'description' => 'Delete carts'
        	],
            [
                'id' => 13,
        		'name' => 'categories-list',
        		'display_name' => 'Display categories Listing',
        		'description' => 'See only Listing Of Item'
        	],
            [
                'id' => 14,
        		'name' => 'categories-create',
        		'display_name' => 'Create categories',
        		'description' => 'Create New categories'
        	],
        	[
                'id' => 15,
        		'name' => 'categories-edit',
        		'display_name' => 'Edit categories',
        		'description' => 'Edit categories'
        	],
        	[
                'id' => 16,
        		'name' => 'categories-delete',
        		'display_name' => 'Delete categories',
        		'description' => 'Delete categories'
        	],
            [
                'id' => 17,
        		'name' => 'couriers-list',
        		'display_name' => 'Display couriers Listing',
        		'description' => 'See only Listing Of couriers'
        	],
            [
                'id' => 18,
        		'name' => 'couriers-create',
        		'display_name' => 'Create couriers',
        		'description' => 'Create New couriers'
        	],
        	[
                'id' => 19,
        		'name' => 'couriers-edit',
        		'display_name' => 'Edit couriers',
        		'description' => 'Edit couriers'
        	],
        	[
                'id' => 20,
        		'name' => 'couriers-delete',
        		'display_name' => 'Delete couriers',
        		'description' => 'Delete couriers'
        	],
            [
                'id' => 21,
        		'name' => 'deliveries-list',
        		'display_name' => 'Display deliveries Listing',
        		'description' => 'See only Listing Of deliveries'
        	],
            [
                'id' => 22,
        		'name' => 'deliveries-create',
        		'display_name' => 'Create deliveries',
        		'description' => 'Create New deliveries'
        	],
        	[
                'id' => 23,
        		'name' => 'deliveries-edit',
        		'display_name' => 'Edit deliveries',
        		'description' => 'Edit deliveries'
        	],
        	[
                'id' => 24,
        		'name' => 'deliveries-delete',
        		'display_name' => 'Delete deliveries',
        		'description' => 'Delete deliveries'
        	],
            [
                'id' => 25,
        		'name' => 'delivery_trackings-list',
        		'display_name' => 'Display delivery_trackings Listing',
        		'description' => 'See only Listing Of delivery_trackings'
        	],
            [
                'id' => 26,
        		'name' => 'delivery_trackings-create',
        		'display_name' => 'Create delivery_trackings',
        		'description' => 'Create New delivery_trackings'
        	],
        	[
                'id' => 27,
        		'name' => 'delivery_trackings-edit',
        		'display_name' => 'Edit delivery_trackings',
        		'description' => 'Edit delivery_trackings'
        	],
        	[
                'id' => 28,
        		'name' => 'delivery_trackings-delete',
        		'display_name' => 'Delete delivery_trackings',
        		'description' => 'Delete delivery_trackings'
        	],
            [
                'id' => 29,
        		'name' => 'item_images-list',
        		'display_name' => 'Display item_images Listing',
        		'description' => 'See only Listing Of item_images'
        	],
            [
                'id' => 30,
        		'name' => 'item_images-create',
        		'display_name' => 'Create item_images',
        		'description' => 'Create New item_images'
        	],
        	[
                'id' => 31,
        		'name' => 'item_images-edit',
        		'display_name' => 'Edit item_images',
        		'description' => 'Edit item_images'
        	],
        	[
                'id' => 32,
        		'name' => 'item_images-delete',
        		'display_name' => 'Delete item_images',
        		'description' => 'Delete item_images'
        	],
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
