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
            [
                'id' => 33,
        		'name' => 'members-list',
        		'display_name' => 'Display members Listing',
        		'description' => 'See only Listing Of members'
        	],
            [
                'id' => 34,
        		'name' => 'members-create',
        		'display_name' => 'Create members',
        		'description' => 'Create New members'
        	],
        	[
                'id' => 35,
        		'name' => 'members-edit',
        		'display_name' => 'Edit members',
        		'description' => 'Edit members'
        	],
        	[
                'id' => 36,
        		'name' => 'members-delete',
        		'display_name' => 'Delete members',
        		'description' => 'Delete members'
        	],
            [
                'id' => 37,
        		'name' => 'order_details-list',
        		'display_name' => 'Display order_details Listing',
        		'description' => 'See only Listing Of order_details'
        	],
            [
                'id' => 38,
        		'name' => 'order_details-create',
        		'display_name' => 'Create order_details',
        		'description' => 'Create New order_details'
        	],
        	[
                'id' => 39,
        		'name' => 'order_details-edit',
        		'display_name' => 'Edit order_details',
        		'description' => 'Edit order_details'
        	],
        	[
                'id' => 40,
        		'name' => 'order_details-delete',
        		'display_name' => 'Delete order_details',
        		'description' => 'Delete order_details'
        	],
            [
                'id' => 41,
        		'name' => 'orders-list',
        		'display_name' => 'Display orders Listing',
        		'description' => 'See only Listing Of orders'
        	],
            [
                'id' => 42,
        		'name' => 'orders-create',
        		'display_name' => 'Create orders',
        		'description' => 'Create New orders'
        	],
        	[
                'id' => 43,
        		'name' => 'orders-edit',
        		'display_name' => 'Edit orders',
        		'description' => 'Edit orders'
        	],
        	[
                'id' => 44,
        		'name' => 'orders-delete',
        		'display_name' => 'Delete orders',
        		'description' => 'Delete orders'
        	],
            [
                'id' => 45,
        		'name' => 'page_fields-list',
        		'display_name' => 'Display page_fields Listing',
        		'description' => 'See only Listing Of page_fields'
        	],
            [
                'id' => 46,
        		'name' => 'page_fields-create',
        		'display_name' => 'Create page_fields',
        		'description' => 'Create New page_fields'
        	],
        	[
                'id' => 47,
        		'name' => 'page_fields-edit',
        		'display_name' => 'Edit page_fields',
        		'description' => 'Edit page_fields'
        	],
        	[
                'id' => 48,
        		'name' => 'page_fields-delete',
        		'display_name' => 'Delete page_fields',
        		'description' => 'Delete page_fields'
        	],
            [
                'id' => 49,
        		'name' => 'page_images-list',
        		'display_name' => 'Display page_images Listing',
        		'description' => 'See only Listing Of page_images'
        	],
            [
                'id' => 50,
        		'name' => 'page_images-create',
        		'display_name' => 'Create page_images',
        		'description' => 'Create New page_images'
        	],
        	[
                'id' => 51,
        		'name' => 'page_images-edit',
        		'display_name' => 'Edit page_images',
        		'description' => 'Edit page_images'
        	],
        	[
                'id' => 52,
        		'name' => 'page_images-delete',
        		'display_name' => 'Delete page_images',
        		'description' => 'Delete page_images'
        	],
            [
                'id' => 53,
        		'name' => 'pages-list',
        		'display_name' => 'Display pages Listing',
        		'description' => 'See only Listing Of pages'
        	],
            [
                'id' => 54,
        		'name' => 'pages-create',
        		'display_name' => 'Create pages',
        		'description' => 'Create New pages'
        	],
        	[
                'id' => 55,
        		'name' => 'pages-edit',
        		'display_name' => 'Edit pages',
        		'description' => 'Edit pages'
        	],
        	[
                'id' => 56,
        		'name' => 'pages-delete',
        		'display_name' => 'Delete pages',
        		'description' => 'Delete pages'
        	],
            [
                'id' => 57,
        		'name' => 'payments-list',
        		'display_name' => 'Display payments Listing',
        		'description' => 'See only Listing Of payments'
        	],
            [
                'id' => 58,
        		'name' => 'payments-create',
        		'display_name' => 'Create payments',
        		'description' => 'Create New payments'
        	],
        	[
                'id' => 59,
        		'name' => 'payments-edit',
        		'display_name' => 'Edit payments',
        		'description' => 'Edit payments'
        	],
        	[
                'id' => 60,
        		'name' => 'payments-delete',
        		'display_name' => 'Delete payments',
        		'description' => 'Delete payments'
        	],
            [
                'id' => 61,
        		'name' => 'permissions-list',
        		'display_name' => 'Display permissions Listing',
        		'description' => 'See only Listing Of permissions'
        	],
            [
                'id' => 62,
        		'name' => 'permissions-create',
        		'display_name' => 'Create permissions',
        		'description' => 'Create New permissions'
        	],
        	[
                'id' => 63,
        		'name' => 'permissions-edit',
        		'display_name' => 'Edit permissions',
        		'description' => 'Edit permissions'
        	],
        	[
                'id' => 64,
        		'name' => 'permissions-delete',
        		'display_name' => 'Delete permissions',
        		'description' => 'Delete permissions'
        	],
            [
                'id' => 65,
        		'name' => 'product_images-list',
        		'display_name' => 'Display product_images Listing',
        		'description' => 'See only Listing Of product_images'
        	],
            [
                'id' => 66,
        		'name' => 'product_images-create',
        		'display_name' => 'Create product_images',
        		'description' => 'Create New product_images'
        	],
        	[
                'id' => 67,
        		'name' => 'product_images-edit',
        		'display_name' => 'Edit product_images',
        		'description' => 'Edit product_images'
        	],
        	[
                'id' => 68,
        		'name' => 'product_images-delete',
        		'display_name' => 'Delete product_images',
        		'description' => 'Delete product_images'
        	],
            [
                'id' => 69,
        		'name' => 'products-list',
        		'display_name' => 'Display products Listing',
        		'description' => 'See only Listing Of products'
        	],
            [
                'id' => 70,
        		'name' => 'products-create',
        		'display_name' => 'Create products',
        		'description' => 'Create New products'
        	],
        	[
                'id' => 71,
        		'name' => 'products-edit',
        		'display_name' => 'Edit products',
        		'description' => 'Edit products'
        	],
        	[
                'id' => 72,
        		'name' => 'products-delete',
        		'display_name' => 'Delete products',
        		'description' => 'Delete products'
        	],
            [
                'id' => 73,
        		'name' => 'promotions-list',
        		'display_name' => 'Display promotions Listing',
        		'description' => 'See only Listing Of promotions'
        	],
            [
                'id' => 74,
        		'name' => 'promotions-create',
        		'display_name' => 'Create promotions',
        		'description' => 'Create New promotions'
        	],
        	[
                'id' => 75,
        		'name' => 'promotions-edit',
        		'display_name' => 'Edit promotions',
        		'description' => 'Edit promotions'
        	],
        	[
                'id' => 76,
        		'name' => 'promotions-delete',
        		'display_name' => 'Delete promotions',
        		'description' => 'Delete promotions'
        	],
            [
                'id' => 77,
        		'name' => 'sessions-list',
        		'display_name' => 'Display sessions Listing',
        		'description' => 'See only Listing Of sessions'
        	],
            [
                'id' => 78,
        		'name' => 'sessions-create',
        		'display_name' => 'Create sessions',
        		'description' => 'Create New sessions'
        	],
        	[
                'id' => 79,
        		'name' => 'sessions-edit',
        		'display_name' => 'Edit sessions',
        		'description' => 'Edit sessions'
        	],
        	[
                'id' => 80,
        		'name' => 'sessions-delete',
        		'display_name' => 'Delete sessions',
        		'description' => 'Delete sessions'
        	],
            [
                'id' => 81,
        		'name' => 'shipping_costs-list',
        		'display_name' => 'Display shipping_costs Listing',
        		'description' => 'See only Listing Of shipping_costs'
        	],
            [
                'id' => 82,
        		'name' => 'shipping_costs-create',
        		'display_name' => 'Create shipping_costs',
        		'description' => 'Create New shipping_costs'
        	],
        	[
                'id' => 83,
        		'name' => 'shipping_costs-edit',
        		'display_name' => 'Edit shipping_costs',
        		'description' => 'Edit shipping_costs'
        	],
        	[
                'id' => 84,
        		'name' => 'shipping_costs-delete',
        		'display_name' => 'Delete shipping_costs',
        		'description' => 'Delete shipping_costs'
        	],
            [
                'id' => 85,
        		'name' => 'sliders-list',
        		'display_name' => 'Display sliders Listing',
        		'description' => 'See only Listing Of sliders'
        	],
            [
                'id' => 86,
        		'name' => 'sliders-create',
        		'display_name' => 'Create sliders',
        		'description' => 'Create New sliders'
        	],
        	[
                'id' => 87,
        		'name' => 'sliders-edit',
        		'display_name' => 'Edit sliders',
        		'description' => 'Edit sliders'
        	],
        	[
                'id' => 88,
        		'name' => 'sliders-delete',
        		'display_name' => 'Delete sliders',
        		'description' => 'Delete sliders'
        	],
            [
                'id' => 89,
        		'name' => 'tag-list',
        		'display_name' => 'Display tag Listing',
        		'description' => 'See only Listing Of tag'
        	],
            [
                'id' => 90,
        		'name' => 'tag-create',
        		'display_name' => 'Create tag',
        		'description' => 'Create New tag'
        	],
        	[
                'id' => 91,
        		'name' => 'tag-edit',
        		'display_name' => 'Edit tag',
        		'description' => 'Edit tag'
        	],
        	[
                'id' => 92,
        		'name' => 'tag-delete',
        		'display_name' => 'Delete tag',
        		'description' => 'Delete tag'
        	],
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
