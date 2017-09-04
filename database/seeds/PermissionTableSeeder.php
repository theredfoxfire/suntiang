<?php
use Illuminate\Database\Seeder;
use App\Model\Permission;

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
            [
                'id' => 93,
        		'name' => 'upload-list',
        		'display_name' => 'Display tag upload-list',
        		'description' => 'See only upload-list Of tag'
        	],
            [
                'id' => 94,
        		'name' => 'upload-file',
        		'display_name' => 'Create upload-file',
        		'description' => 'Create New upload-file'
        	],
        	[
                'id' => 95,
        		'name' => 'upload-folder',
        		'display_name' => 'create upload-folder',
        		'description' => 'create upload-folder'
        	],
        	[
                'id' => 96,
                'name' => 'upload-deleteFolder',
                'display_name' => 'Delete upload-deleteFolder',
                'description' => 'Delete upload-deleteFolder'
            ],
            [
                'id' => 97,
        		'name' => 'upload-deleteFile',
        		'display_name' => 'Delete upload-deleteFile',
        		'description' => 'Delete upload-deleteFile'
        	],
            [
                'id' => 98,
                'name' => 'post-list',
                'display_name' => 'Display post Listing',
                'description' => 'See only Listing Of post'
            ],
            [
                'id' => 99,
                'name' => 'post-create',
                'display_name' => 'Create post',
                'description' => 'Create New post'
            ],
            [
                'id' => 100,
                'name' => 'post-edit',
                'display_name' => 'Edit post',
                'description' => 'Edit post'
            ],
            [
                'id' => 101,
                'name' => 'post-delete',
                'display_name' => 'Delete post',
                'description' => 'Delete post'
            ],
            [
                'id' => 102,
                'name' => 'users-list',
                'display_name' => 'Display users Listing',
                'description' => 'See only Listing Of users'
            ],
            [
                'id' => 103,
                'name' => 'users-create',
                'display_name' => 'Create users',
                'description' => 'Create New users'
            ],
            [
                'id' => 104,
                'name' => 'users-edit',
                'display_name' => 'Edit users',
                'description' => 'Edit users'
            ],
            [
                'id' => 105,
                'name' => 'users-delete',
                'display_name' => 'Delete users',
                'description' => 'Delete users'
            ],
            [
                'id' => 106,
                'name' => 'package-list',
                'display_name' => 'Display package Listing',
                'description' => 'See only Listing Of package'
            ],
            [
                'id' => 107,
                'name' => 'package-create',
                'display_name' => 'Create package',
                'description' => 'Create New package'
            ],
            [
                'id' => 108,
                'name' => 'package-edit',
                'display_name' => 'Edit package',
                'description' => 'Edit package'
            ],
            [
                'id' => 109,
                'name' => 'package-delete',
                'display_name' => 'Delete package',
                'description' => 'Delete package'
            ],
            [
                'id' => 110,
                'name' => 'about-list',
                'display_name' => 'Display about Listing',
                'description' => 'See only Listing Of package'
            ],
            [
                'id' => 111,
                'name' => 'about-edit',
                'display_name' => 'about edit',
                'description' => 'about edit'
            ],
            [
                'id' => 112,
                'name' => 'about-update',
                'display_name' => 'about update',
                'description' => 'about update'
            ],
            [
                'id' => 113,
                'name' => 'faq-list',
                'display_name' => 'FAQ list',
                'description' => 'FAQ list'
            ],
            [
                'id' => 114,
                'name' => 'faq-edit',
                'display_name' => 'FAQ Edit',
                'description' => 'FAQ Edit'
            ],
            [
                'id' => 115,
                'name' => 'faq-update',
                'display_name' => 'FAQ Update',
                'description' => 'FAQ Update'
            ],
            [
                'id' => 116,
                'name' => 'faq-create',
                'display_name' => 'FAQ create',
                'description' => 'FAQ create'
            ],
            [
                'id' => 117,
                'name' => 'faq-store',
                'display_name' => 'FAQ store',
                'description' => 'FAQ store'
            ],
            [
                'id' => 118,
                'name' => 'faq-delete',
                'display_name' => 'FAQ delete',
                'description' => 'FAQ delete'
            ],
            [
                'id' => 119,
                'name' => 'faq_category-list',
                'display_name' => 'Display faq_category Listing',
                'description' => 'See only Listing Of faq_category'
            ],
            [
                'id' => 120,
                'name' => 'faq_category-create',
                'display_name' => 'Create faq_category',
                'description' => 'Create New faq_category'
            ],
            [
                'id' => 121,
                'name' => 'faq_category-edit',
                'display_name' => 'Edit faq_category',
                'description' => 'Edit faq_category'
            ],
            [
                'id' => 122,
                'name' => 'faq_category-delete',
                'display_name' => 'Delete faq_category',
                'description' => 'Delete faq_category'
            ],
            [
                'id' => 123,
                'name' => 'promo-list',
                'display_name' => 'Display promo Listing',
                'description' => 'See only Listing Of promo'
            ],
            [
                'id' => 124,
                'name' => 'promo-create',
                'display_name' => 'Create promo',
                'description' => 'Create New promo'
            ],
            [
                'id' => 125,
                'name' => 'promo-edit',
                'display_name' => 'Edit promo',
                'description' => 'Edit promo'
            ],
            [
                'id' => 126,
                'name' => 'promo-delete',
                'display_name' => 'Delete promo',
                'description' => 'Delete promo'
            ],
            [
                'id' => 127,
                'name' => 'how_to_order-list',
                'display_name' => 'Display how_to_order Listing',
                'description' => 'See only Listing Of how_to_order'
            ],
            [
                'id' => 128,
                'name' => 'how_to_order-create',
                'display_name' => 'Create how_to_order',
                'description' => 'Create New how_to_order'
            ],
            [
                'id' => 129,
                'name' => 'how_to_order-edit',
                'display_name' => 'Edit how_to_order',
                'description' => 'Edit how_to_order'
            ],
            [
                'id' => 130,
                'name' => 'how_to_order-delete',
                'display_name' => 'Delete how_to_order',
                'description' => 'Delete how_to_order'
            ],
            [
                'id' => 131,
                'name' => 'contact_info-list',
                'display_name' => 'Display contact_info Listing',
                'description' => 'See only Listing Of contact_info'
            ],
            [
                'id' => 132,
                'name' => 'contact_info-create',
                'display_name' => 'Create contact_info',
                'description' => 'Create New contact_info'
            ],
            [
                'id' => 133,
                'name' => 'contact_info-edit',
                'display_name' => 'Edit contact_info',
                'description' => 'Edit contact_info'
            ],
            [
                'id' => 134,
                'name' => 'contact_info-delete',
                'display_name' => 'Delete contact_info',
                'description' => 'Delete contact_info'
            ],
            [
                'id' => 135,
                'name' => 'contact_message-list',
                'display_name' => 'Display contact_message Listing',
                'description' => 'See only Listing Of contact_message'
            ],
            [
                'id' => 136,
                'name' => 'contact_message-edit',
                'display_name' => 'Edit contact_message',
                'description' => 'Edit contact_message'
            ],
            [
                'id' => 137,
                'name' => 'contact_message-delete',
                'display_name' => 'Delete contact_message',
                'description' => 'Delete contact_message'
            ],
            [
                'id' => 138,
                'name' => 'disclaimer-list',
                'display_name' => 'Display disclaimer Listing',
                'description' => 'See only Listing Of disclaimer'
            ],
            [
                'id' => 139,
                'name' => 'disclaimer-create',
                'display_name' => 'Create disclaimer',
                'description' => 'Create New disclaimer'
            ],
            [
                'id' => 140,
                'name' => 'disclaimer-edit',
                'display_name' => 'Edit disclaimer',
                'description' => 'Edit disclaimer'
            ],
            [
                'id' => 141,
                'name' => 'disclaimer-delete',
                'display_name' => 'Delete disclaimer',
                'description' => 'Delete disclaimer'
            ],
            [
                'id' => 142,
                'name' => 'term-list',
                'display_name' => 'Display term Listing',
                'description' => 'See only Listing Of term'
            ],
            [
                'id' => 143,
                'name' => 'term-create',
                'display_name' => 'Create term',
                'description' => 'Create New term'
            ],
            [
                'id' => 144,
                'name' => 'term-edit',
                'display_name' => 'Edit term',
                'description' => 'Edit term'
            ],
            [
                'id' => 145,
                'name' => 'term-delete',
                'display_name' => 'Delete term',
                'description' => 'Delete term'
            ],
            [
                'id' => 146,
                'name' => 'privacy-list',
                'display_name' => 'Display privacy Listing',
                'description' => 'See only Listing Of privacy'
            ],
            [
                'id' => 147,
                'name' => 'privacy-create',
                'display_name' => 'Create privacy',
                'description' => 'Create New privacy'
            ],
            [
                'id' => 148,
                'name' => 'privacy-edit',
                'display_name' => 'Edit privacy',
                'description' => 'Edit privacy'
            ],
            [
                'id' => 149,
                'name' => 'privacy-delete',
                'display_name' => 'Delete privacy',
                'description' => 'Delete privacy'
            ],
            [
                'id' => 150,
                'name' => 'coupon-list',
                'display_name' => 'Display coupon Listing',
                'description' => 'See only Listing Of coupon'
            ],
            [
                'id' => 151,
                'name' => 'coupon-create',
                'display_name' => 'Create coupon',
                'description' => 'Create New coupon'
            ],
            [
                'id' => 152,
                'name' => 'coupon-edit',
                'display_name' => 'Edit coupon',
                'description' => 'Edit coupon'
            ],
            [
                'id' => 153,
                'name' => 'coupon-delete',
                'display_name' => 'Delete coupon',
                'description' => 'Delete coupon'
            ],
            [
                'id' => 154,
                'name' => 'contact_message-create',
                'display_name' => 'Create contact_message',
                'description' => 'Create contact_message'
            ],
        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
