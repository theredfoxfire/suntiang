<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/item');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
Route::get('item', 'ItemController@index')->name('item.list');
Route::get('item/item-show/{id}', 'ItemController@itemDetail');
Route::get('item/daily-meal', 'ItemController@dailyMeal')->name('item.dailyMeal');
Route::get('item/daily-meal-show/{id}', 'ItemController@dailyMealDetail')->name('item.dailyMealShow');
Route::get('item/catering', 'ItemController@catering')->name('item.catering');
Route::get('item/catering/{id}', 'ItemController@cateringDetail')->name('item.cateringShow');
Route::get('item/snackbox', 'ItemController@snackbox')->name('item.snackbox');
Route::get('page/{id}', 'PageController@pageDetail');
Route::get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');

// Logging in and out
Route::get('/login', 'Auth\AuthController@getLogin')->name('login');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

Auth::routes();
Route::get('/home', 'HomeController@index');


// Admin area
Route::get('admin', function () {
    return redirect('/admin/post');
});

Route::group([
    'namespace' => 'Admin',
    'middleware' => ['web', 'auth'],
], function () {
    // Tags routes
    Route::get('admin/tag',['as'=>'admin.tag.index',
        'uses'=>'TagController@index',
        'middleware' => ['permission:tag-list|tag-create|tag-edit|tag-delete'],
        ]);
    Route::get('admin/tag/create',['as'=>'admin.tag.create',
        'uses'=>'TagController@create',
        'middleware' => ['permission:tag-create']]);
    Route::post('admin/tag/create',['as'=>'admin.tag.store',
        'uses'=>'TagController@store',
        'middleware' => ['permission:tag-create']]);
    Route::get('admin/tag/{id}',['as'=>'admin.tag.show',
        'uses'=>'TagController@show']);
    Route::get('admin/tag/{id}/edit',['as'=>'admin.tag.edit',
        'uses'=>'TagController@edit',
        'middleware' => ['permission:tag-edit']]);
    Route::patch('admin/tag/{id}',['as'=>'admin.tag.update',
        'uses'=>'TagController@update',
        'middleware' => ['permission:tag-edit']]);
    Route::delete('admin/tag/{id}',['as'=>'admin.tag.destroy',
        'uses'=>'TagController@destroy',
        'middleware' => ['permission:tag-delete']]);

    // Upload Routes
    Route::get('admin/upload', ['as'=>'admin.upload.index',
        'uses'=>'UploadController@index',
        'middleware' => ['permission:upload-list|upload-file|upload-folder|upload-deleteFolder|upload-deleteFile'],
        ]);
    Route::post('admin/upload/file', ['as'=>'admin.upload.file',
        'uses'=>'UploadController@uploadFile',
        'middleware' => ['permission:upload-file']]);
    Route::post('admin/upload/folder', ['as'=>'admin.upload.folder',
        'uses'=>'UploadController@createFolder',
        'middleware' => ['permission:upload-folder']]);
    Route::delete('admin/upload/folder', ['as'=>'admin.upload.deleteFolder',
        'uses'=>'UploadController@deleteFolder',
        'middleware' => ['permission:upload-deleteFolder']]);
    Route::delete('admin/upload/file', ['as'=>'admin.upload.deleteFile',
        'uses'=>'UploadController@deleteFile',
        'middleware' => ['permission:upload-deleteFile']]);

    // Posts routes
    Route::get('admin/post', ['as'=>'admin.post.index',
        'uses'=>'PostController@index',
        'middleware' => ['permission:post-list|post-create|post-edit|post-delete'],
        ]);
    Route::get('admin/post/create', ['as'=>'admin.post.create',
        'uses'=>'PostController@create',
        'middleware' => ['permission:post-create']]);
    Route::post('admin/post/create', ['as'=>'admin.post.store',
        'uses'=>'PostController@store',
        'middleware' => ['permission:post-create']]);
    Route::get('admin/post/{id}',['as'=>'admin.post.show',
        'uses'=>'PostController@show']);
    Route::get('admin/post/{id}/edit',['as'=>'admin.post.edit',
        'uses'=>'PostController@edit',
        'middleware' => ['permission:post-edit']]);
    Route::put('admin/post/{id}',['as'=>'admin.post.update',
        'uses'=>'PostController@update',
        'middleware' => ['permission:post-edit']]);
    Route::delete('admin/post/{id}',['as'=>'admin.post.destroy',
        'uses'=>'PostController@destroy',
        'middleware' => ['permission:post-delete']]);

    // Users Routes
    Route::get('admin/users', ['as'=>'admin.users.index',
        'uses'=>'UserController@index',
        'middleware' => ['permission:users-list|users-create|users-edit|users-delete'],
        ]);
    Route::get('admin/users/create', ['as'=>'admin.users.create',
        'uses'=>'UserController@create',
        'middleware' => ['permission:users-create']]);
    Route::post('admin/users/create', ['as'=>'admin.users.store',
        'uses'=>'UserController@store',
        'middleware' => ['permission:users-create']]);
    Route::get('admin/users/{id}',['as'=>'admin.users.show',
        'uses'=>'UserController@show']);
    Route::get('admin/users/{id}/edit',['as'=>'admin.users.edit',
        'uses'=>'UserController@edit',
        'middleware' => ['permission:users-edit']]);
    Route::patch('admin/users/{id}',['as'=>'admin.users.update',
        'uses'=>'UserController@update',
        'middleware' => ['permission:users-edit']]);
    Route::delete('admin/users/{id}',['as'=>'admin.users.destroy',
        'uses'=>'UserController@destroy',
        'middleware' => ['permission:users-delete']]);

    // Roles routes
    Route::get('admin/roles', ['as'=>'admin.roles.index',
        'uses'=>'RoleController@index',
        'middleware' => ['permission:role-list|role-create|role-edit|role-delete'],
        ]);
    Route::get('admin/roles/create', ['as'=>'admin.roles.create',
        'uses'=>'RoleController@create',
        'middleware' => ['permission:role-create']]);
    Route::post('admin/roles/create', ['as'=>'admin.roles.store',
        'uses'=>'RoleController@store',
        'middleware' => ['permission:role-create']]);
    Route::get('admin/roles/{id}',['as'=>'admin.roles.show',
        'uses'=>'RoleController@show']);
    Route::get('admin/roles/{id}/edit',['as'=>'admin.roles.edit',
        'uses'=>'RoleController@edit',
        'middleware' => ['permission:role-edit']]);
    Route::patch('admin/roles/{id}',['as'=>'admin.roles.update',
        'uses'=>'RoleController@update',
        'middleware' => ['permission:role-edit']]);
    Route::delete('admin/roles/{id}',['as'=>'admin.roles.destroy',
        'uses'=>'RoleController@destroy',
        'middleware' => ['permission:role-delete']]);

    // Items routes
    Route::get('admin/items',['as'=>'admin.items.index',
        'uses'=>'ItemController@index',
        'middleware' => ['permission:items-list|items-create|items-edit|items-delete'],
        ]);
    Route::get('admin/items/create',['as'=>'admin.items.create',
        'uses'=>'ItemController@create',
        'middleware' => ['permission:items-create']]);
    Route::post('admin/items/create',['as'=>'admin.items.store',
        'uses'=>'ItemController@store',
        'middleware' => ['permission:items-create']]);
    Route::get('admin/items/{id}',['as'=>'admin.items.show',
        'uses'=>'ItemController@show']);
    Route::get('admin/items/{id}/edit',['as'=>'admin.items.edit',
        'uses'=>'ItemController@edit',
        'middleware' => ['permission:items-edit']]);
    Route::patch('admin/items/{id}',['as'=>'admin.items.update',
        'uses'=>'ItemController@update',
        'middleware' => ['permission:items-edit']]);
    Route::delete('admin/items/{id}',['as'=>'admin.items.destroy',
        'uses'=>'ItemController@destroy',
        'middleware' => ['permission:items-delete']]);

    //Carts routes
    Route::get('admin/carts', ['as'=>'admin.carts.index',
        'uses'=>'CartsController@index',
        'middleware' => ['permission:carts-list|carts-create|carts-edit|carts-delete'],
    ]);
    Route::get('admin/carts/create',['as'=>'admin.carts.create',
        'uses'=>'CartsController@create',
        'middleware' => ['permission:carts-create']]);
    Route::post('admin/carts/store',['as'=>'admin.carts.store',
        'uses'=>'CartsController@store',
        'middleware' => ['permission:carts-create']]);
    Route::get('admin/carts/{id}',['as'=>'admin.carts.show',
        'uses'=>'CartsController@show']);
    Route::get('admin/carts/{id}/edit',['as'=>'admin.carts.edit',
        'uses'=>'CartsController@edit',
        'middleware' => ['permission:carts-edit']]);
    Route::patch('admin/carts/{id}',['as'=>'admin.carts.update',
        'uses'=>'CartsController@update',
        'middleware' => ['permission:carts-edit']]);
    Route::delete('admin/carts/{id}',['as'=>'admin.carts.destroy',
        'uses'=>'CartsController@destroy',
        'middleware' => ['permission:carts-delete']]);

    //Categories routes
    Route::get('admin/categories', ['as'=>'admin.categories.index',
        'uses'=>'CategoriesController@index',
        'middleware' => ['permission:categories-list|categories-create|categories-edit|categories-delete'],
    ]);
    Route::get('admin/categories/create',['as'=>'admin.categories.create',
        'uses'=>'CategoriesController@create',
        'middleware' => ['permission:categories-create']]);
    Route::post('admin/categories/store',['as'=>'admin.categories.store',
        'uses'=>'CategoriesController@store',
        'middleware' => ['permission:categories-create']]);
    Route::get('admin/categories/{id}',['as'=>'admin.categories.show',
        'uses'=>'CategoriesController@show']);
    Route::get('admin/categories/{id}/edit',['as'=>'admin.categories.edit',
        'uses'=>'CategoriesController@edit',
        'middleware' => ['permission:categories-edit']]);
    Route::patch('admin/categories/{id}',['as'=>'admin.categories.update',
        'uses'=>'CategoriesController@update',
        'middleware' => ['permission:categories-edit']]);
    Route::delete('admin/categories/{id}',['as'=>'admin.categories.destroy',
        'uses'=>'CategoriesController@destroy',
        'middleware' => ['permission:categories-delete']]);

    //Couriers routes
    Route::get('admin/couriers', ['as'=>'admin.couriers.index',
        'uses'=>'CouriersController@index',
        'middleware' => ['permission:couriers-list|couriers-create|couriers-edit|couriers-delete'],
    ]);
    Route::get('admin/couriers/create',['as'=>'admin.couriers.create',
        'uses'=>'CouriersController@create',
        'middleware' => ['permission:couriers-create']]);
    Route::post('admin/couriers/store',['as'=>'admin.couriers.store',
        'uses'=>'CouriersController@store',
        'middleware' => ['permission:couriers-create']]);
    Route::get('admin/couriers/{id}',['as'=>'admin.couriers.show',
        'uses'=>'CouriersController@show']);
    Route::get('admin/couriers/{id}/edit',['as'=>'admin.couriers.edit',
        'uses'=>'CouriersController@edit',
        'middleware' => ['permission:couriers-edit']]);
    Route::patch('admin/couriers/{id}',['as'=>'admin.couriers.update',
        'uses'=>'CouriersController@update',
        'middleware' => ['permission:couriers-edit']]);
    Route::delete('admin/couriers/{id}',['as'=>'admin.couriers.destroy',
        'uses'=>'CouriersController@destroy',
        'middleware' => ['permission:couriers-delete']]);

    //Deliveries routes
    Route::get('admin/deliveries', ['as'=>'admin.deliveries.index',
        'uses'=>'DeliveriesController@index',
        'middleware' => ['permission:deliveries-list|deliveries-create|deliveries-edit|deliveries-delete'],
    ]);
    Route::get('admin/deliveries/create',['as'=>'admin.deliveries.create',
        'uses'=>'DeliveriesController@create',
        'middleware' => ['permission:deliveries-create']]);
    Route::post('admin/deliveries/store',['as'=>'admin.deliveries.store',
        'uses'=>'DeliveriesController@store',
        'middleware' => ['permission:deliveries-create']]);
    Route::get('admin/deliveries/{id}',['as'=>'admin.deliveries.show',
        'uses'=>'DeliveriesController@show']);
    Route::get('admin/deliveries/{id}/edit',['as'=>'admin.deliveries.edit',
        'uses'=>'DeliveriesController@edit',
        'middleware' => ['permission:deliveries-edit']]);
    Route::patch('admin/deliveries/{id}',['as'=>'admin.deliveries.update',
        'uses'=>'DeliveriesController@update',
        'middleware' => ['permission:deliveries-edit']]);
    Route::delete('admin/deliveries/{id}',['as'=>'admin.deliveries.destroy',
        'uses'=>'DeliveriesController@destroy',
        'middleware' => ['permission:deliveries-delete']]);

    //Delivery Trackings routes
    Route::get('admin/delivery_trackings', ['as'=>'admin.delivery_trackings.index',
        'uses'=>'DeliveryTrackingsController@index',
        'middleware' => ['permission:delivery_trackings-list|delivery_trackings-create|delivery_trackings-edit|delivery_trackings-delete'],
    ]);
    Route::get('admin/delivery_trackings/create',['as'=>'admin.delivery_trackings.create',
        'uses'=>'DeliveryTrackingsController@create',
        'middleware' => ['permission:delivery_trackings-create']]);
    Route::post('admin/delivery_trackings/store',['as'=>'admin.delivery_trackings.store',
        'uses'=>'DeliveryTrackingsController@store',
        'middleware' => ['permission:delivery_trackings-create']]);
    Route::get('admin/delivery_trackings/{id}',['as'=>'admin.delivery_trackings.show',
        'uses'=>'DeliveryTrackingsController@show']);
    Route::get('admin/delivery_trackings/{id}/edit',['as'=>'admin.delivery_trackings.edit',
        'uses'=>'DeliveryTrackingsController@edit',
        'middleware' => ['permission:delivery_trackings-edit']]);
    Route::patch('admin/delivery_trackings/{id}',['as'=>'admin.delivery_trackings.update',
        'uses'=>'DeliveryTrackingsController@update',
        'middleware' => ['permission:delivery_trackings-edit']]);
    Route::delete('admin/delivery_trackings/{id}',['as'=>'admin.delivery_trackings.destroy',
        'uses'=>'DeliveryTrackingsController@destroy',
        'middleware' => ['permission:delivery_trackings-delete']]);

    //Item Image routes
    Route::get('admin/item-images', ['as'=>'admin.item_images.index',
        'uses'=>'ItemImagesController@index',
        'middleware' => ['permission:item_images-list|item_images-create|item_images-edit|item_images-delete'],
    ]);
    Route::get('admin/item-images/create',['as'=>'admin.item_images.create',
        'uses'=>'ItemImagesController@create',
        'middleware' => ['permission:item_images-create']]);
    Route::post('admin/item-images/store',['as'=>'admin.item_images.store',
        'uses'=>'ItemImagesController@store',
        'middleware' => ['permission:item_images-create']]);
    Route::get('admin/item-images/{id}',['as'=>'admin.item_images.show',
        'uses'=>'ItemImagesController@show']);
    Route::get('admin/item-images/{id}/edit',['as'=>'admin.item_images.edit',
        'uses'=>'ItemImagesController@edit',
        'middleware' => ['permission:item_images-edit']]);
    Route::patch('admin/item-images/{id}',['as'=>'admin.item_images.update',
        'uses'=>'ItemImagesController@update',
        'middleware' => ['permission:item_images-edit']]);
    Route::delete('admin/item-images/{id}',['as'=>'admin.item_images.destroy',
        'uses'=>'ItemImagesController@destroy',
        'middleware' => ['permission:item_images-delete']]);

    //Members routes
    Route::get('admin/members', ['as'=>'admin.members.index',
        'uses'=>'MembersController@index',
        'middleware' => ['permission:members-list|members-create|members-edit|members-delete'],
    ]);
    Route::get('admin/members/create',['as'=>'admin.members.create',
        'uses'=>'MembersController@create',
        'middleware' => ['permission:members-create']]);
    Route::post('admin/members/store',['as'=>'admin.members.store',
        'uses'=>'MembersController@store',
        'middleware' => ['permission:members-create']]);
    Route::get('admin/members/{id}',['as'=>'admin.members.show',
        'uses'=>'MembersController@show']);
    Route::get('admin/members/{id}/edit',['as'=>'admin.members.edit',
        'uses'=>'MembersController@edit',
        'middleware' => ['permission:members-edit']]);
    Route::patch('admin/members/{id}',['as'=>'admin.members.update',
        'uses'=>'MembersController@update',
        'middleware' => ['permission:members-edit']]);
    Route::delete('admin/members/{id}',['as'=>'admin.members.destroy',
        'uses'=>'MembersController@destroy',
        'middleware' => ['permission:members-delete']]);

    //Order Detail routes
    Route::get('admin/order_details', ['as'=>'admin.order_details.index',
        'uses'=>'OrderDetailController@index',
        'middleware' => ['permission:order_details-list|order_details-create|order_details-edit|order_details-delete'],
    ]);
    Route::get('admin/order_details/create',['as'=>'admin.order_details.create',
        'uses'=>'OrderDetailController@create',
        'middleware' => ['permission:order_details-create']]);
    Route::post('admin/order_details/store',['as'=>'admin.order_details.store',
        'uses'=>'OrderDetailController@store',
        'middleware' => ['permission:order_details-create']]);
    Route::get('admin/order_details/{id}',['as'=>'admin.order_details.show',
        'uses'=>'OrderDetailController@show']);
    Route::get('admin/order_details/{id}/edit',['as'=>'admin.order_details.edit',
        'uses'=>'OrderDetailController@edit',
        'middleware' => ['permission:order_details-edit']]);
    Route::patch('admin/order_details/{id}',['as'=>'admin.order_details.update',
        'uses'=>'OrderDetailController@update',
        'middleware' => ['permission:order_details-edit']]);
    Route::delete('admin/order_details/{id}',['as'=>'admin.order_details.destroy',
        'uses'=>'OrderDetailController@destroy',
        'middleware' => ['permission:order_details-delete']]);

    //Orders routes
    Route::get('admin/orders', ['as'=>'admin.orders.index',
        'uses'=>'OrdersController@index',
        'middleware' => ['permission:orders-list|orders-create|orders-edit|orders-delete'],
    ]);
    Route::get('admin/orders/create',['as'=>'admin.orders.create',
        'uses'=>'OrdersController@create',
        'middleware' => ['permission:orders-create']]);
    Route::post('admin/orders/store',['as'=>'admin.orders.store',
        'uses'=>'OrdersController@store',
        'middleware' => ['permission:orders-create']]);
    Route::get('admin/orders/{id}',['as'=>'admin.orders.show',
        'uses'=>'OrdersController@show']);
    Route::get('admin/orders/{id}/edit',['as'=>'admin.orders.edit',
        'uses'=>'OrdersController@edit',
        'middleware' => ['permission:orders-edit']]);
    Route::patch('admin/orders/{id}',['as'=>'admin.orders.update',
        'uses'=>'OrdersController@update',
        'middleware' => ['permission:orders-edit']]);
    Route::delete('admin/orders/{id}',['as'=>'admin.orders.destroy',
        'uses'=>'OrdersController@destroy',
        'middleware' => ['permission:orders-delete']]);

    //PageFields routes
    Route::get('admin/page_fields', ['as'=>'admin.page_fields.index',
        'uses'=>'PageFieldsController@index',
        'middleware' => ['permission:page_fields-list|page_fields-create|page_fields-edit|page_fields-delete'],
    ]);
    Route::get('admin/page_fields/create',['as'=>'admin.page_fields.create',
        'uses'=>'PageFieldsController@create',
        'middleware' => ['permission:page_fields-create']]);
    Route::post('admin/page_fields/store',['as'=>'admin.page_fields.store',
        'uses'=>'PageFieldsController@store',
        'middleware' => ['permission:page_fields-create']]);
    Route::get('admin/page_fields/{id}',['as'=>'admin.page_fields.show',
        'uses'=>'PageFieldsController@show']);
    Route::get('admin/page_fields/{id}/edit',['as'=>'admin.page_fields.edit',
        'uses'=>'PageFieldsController@edit',
        'middleware' => ['permission:page_fields-edit']]);
    Route::patch('admin/page_fields/{id}',['as'=>'admin.page_fields.update',
        'uses'=>'PageFieldsController@update',
        'middleware' => ['permission:page_fields-edit']]);
    Route::delete('admin/page_fields/{id}',['as'=>'admin.page_fields.destroy',
        'uses'=>'PageFieldsController@destroy',
        'middleware' => ['permission:page_fields-delete']]);

    //PageImages routes
    Route::get('admin/page_images', ['as'=>'admin.page_images.index',
        'uses'=>'PageImagesController@index',
        'middleware' => ['permission:page_images-list|page_images-create|page_images-edit|page_images-delete'],
    ]);
    Route::get('admin/page_images/create',['as'=>'admin.page_images.create',
        'uses'=>'PageImagesController@create',
        'middleware' => ['permission:page_images-create']]);
    Route::post('admin/page_images/store',['as'=>'admin.page_images.store',
        'uses'=>'PageImagesController@store',
        'middleware' => ['permission:page_images-create']]);
    Route::get('admin/page_images/{id}',['as'=>'admin.page_images.show',
        'uses'=>'PageImagesController@show']);
    Route::get('admin/page_images/{id}/edit',['as'=>'admin.page_images.edit',
        'uses'=>'PageImagesController@edit',
        'middleware' => ['permission:page_images-edit']]);
    Route::patch('admin/page_images/{id}',['as'=>'admin.page_images.update',
        'uses'=>'PageImagesController@update',
        'middleware' => ['permission:page_images-edit']]);
    Route::delete('admin/page_images/{id}',['as'=>'admin.page_images.destroy',
        'uses'=>'PageImagesController@destroy',
        'middleware' => ['permission:page_images-delete']]);

    //Pages routes
    Route::get('admin/pages', ['as'=>'admin.pages.index',
        'uses'=>'PagesController@index',
        'middleware' => ['permission:pages-list|pages-create|pages-edit|pages-delete'],
    ]);
    Route::get('admin/pages/create',['as'=>'admin.pages.create',
        'uses'=>'PagesController@create',
        'middleware' => ['permission:pages-create']]);
    Route::post('admin/pages/store',['as'=>'admin.pages.store',
        'uses'=>'PagesController@store',
        'middleware' => ['permission:pages-create']]);
    Route::get('admin/pages/{id}',['as'=>'admin.pages.show',
        'uses'=>'PagesController@show']);
    Route::get('admin/pages/{id}/edit',['as'=>'admin.pages.edit',
        'uses'=>'PagesController@edit',
        'middleware' => ['permission:pages-edit']]);
    Route::patch('admin/pages/{id}',['as'=>'admin.pages.update',
        'uses'=>'PagesController@update',
        'middleware' => ['permission:pages-edit']]);
    Route::delete('admin/pages/{id}',['as'=>'admin.pages.destroy',
        'uses'=>'PagesController@destroy',
        'middleware' => ['permission:pages-delete']]);

    //Payments routes
    Route::get('admin/payments', ['as'=>'admin.payments.index',
        'uses'=>'PaymentsController@index',
        'middleware' => ['permission:payments-list|payments-create|payments-edit|payments-delete'],
    ]);
    Route::get('admin/payments/create',['as'=>'admin.payments.create',
        'uses'=>'PaymentsController@create',
        'middleware' => ['permission:payments-create']]);
    Route::post('admin/payments/store',['as'=>'admin.payments.store',
        'uses'=>'PaymentsController@store',
        'middleware' => ['permission:payments-create']]);
    Route::get('admin/payments/{id}',['as'=>'admin.payments.show',
        'uses'=>'PaymentsController@show']);
    Route::get('admin/payments/{id}/edit',['as'=>'admin.payments.edit',
        'uses'=>'PaymentsController@edit',
        'middleware' => ['permission:payments-edit']]);
    Route::patch('admin/payments/{id}',['as'=>'admin.payments.update',
        'uses'=>'PaymentsController@update',
        'middleware' => ['permission:payments-edit']]);
    Route::delete('admin/payments/{id}',['as'=>'admin.payments.destroy',
        'uses'=>'PaymentsController@destroy',
        'middleware' => ['permission:payments-delete']]);

    //Permissions routes
    Route::get('admin/permissions', ['as'=>'admin.permissions.index',
        'uses'=>'PermissionController@index',
        'middleware' => ['permission:permissions-list|permissions-create|permissions-edit|permissions-delete'],
    ]);
    Route::get('admin/permissions/create',['as'=>'admin.permissions.create',
        'uses'=>'PermissionController@create',
        'middleware' => ['permission:permissions-create']]);
    Route::post('admin/permissions/store',['as'=>'admin.permissions.store',
        'uses'=>'PermissionController@store',
        'middleware' => ['permission:permissions-create']]);
    Route::get('admin/permissions/{id}',['as'=>'admin.permissions.show',
        'uses'=>'PermissionController@show']);
    Route::get('admin/permissions/{id}/edit',['as'=>'admin.permissions.edit',
        'uses'=>'PermissionController@edit',
        'middleware' => ['permission:permissions-edit']]);
    Route::patch('admin/permissions/{id}',['as'=>'admin.permissions.update',
        'uses'=>'PermissionController@update',
        'middleware' => ['permission:permissions-edit']]);
    Route::delete('admin/permissions/{id}',['as'=>'admin.permissions.destroy',
        'uses'=>'PermissionController@destroy',
        'middleware' => ['permission:permissions-delete']]);

    //ProductImages routes
    Route::get('admin/product_images', ['as'=>'admin.product_images.index',
        'uses'=>'ProductImagesController@index',
        'middleware' => ['permission:product_images-list|product_images-create|product_images-edit|product_images-delete'],
    ]);
    Route::get('admin/product_images/create',['as'=>'admin.product_images.create',
        'uses'=>'ProductImagesController@create',
        'middleware' => ['permission:product_images-create']]);
    Route::post('admin/product_images/store',['as'=>'admin.product_images.store',
        'uses'=>'ProductImagesController@store',
        'middleware' => ['permission:product_images-create']]);
    Route::get('admin/product_images/{id}',['as'=>'admin.product_images.show',
        'uses'=>'ProductImagesController@show']);
    Route::get('admin/product_images/{id}/edit',['as'=>'admin.product_images.edit',
        'uses'=>'ProductImagesController@edit',
        'middleware' => ['permission:product_images-edit']]);
    Route::patch('admin/product_images/{id}',['as'=>'admin.product_images.update',
        'uses'=>'ProductImagesController@update',
        'middleware' => ['permission:product_images-edit']]);
    Route::delete('admin/product_images/{id}',['as'=>'admin.product_images.destroy',
        'uses'=>'ProductImagesController@destroy',
        'middleware' => ['permission:product_images-delete']]);

    //Products routes
    Route::get('admin/products', ['as'=>'admin.products.index',
        'uses'=>'ProductsController@index',
        'middleware' => ['permission:products-list|products-create|products-edit|products-delete'],
    ]);
    Route::get('admin/products/create',['as'=>'admin.products.create',
        'uses'=>'ProductsController@create',
        'middleware' => ['permission:products-create']]);
    Route::post('admin/products/store',['as'=>'admin.products.store',
        'uses'=>'ProductsController@store',
        'middleware' => ['permission:products-create']]);
    Route::get('admin/products/{id}',['as'=>'admin.products.show',
        'uses'=>'ProductsController@show']);
    Route::get('admin/products/{id}/edit',['as'=>'admin.products.edit',
        'uses'=>'ProductsController@edit',
        'middleware' => ['permission:products-edit']]);
    Route::patch('admin/products/{id}',['as'=>'admin.products.update',
        'uses'=>'ProductsController@update',
        'middleware' => ['permission:products-edit']]);
    Route::delete('admin/products/{id}',['as'=>'admin.products.destroy',
        'uses'=>'ProductsController@destroy',
        'middleware' => ['permission:products-delete']]);

    //Promotions routes
    Route::get('admin/promotions', ['as'=>'admin.promotions.index',
        'uses'=>'PromotionsController@index',
        'middleware' => ['permission:promotions-list|promotions-create|promotions-edit|promotions-delete'],
    ]);
    Route::get('admin/promotions/create',['as'=>'admin.promotions.create',
        'uses'=>'PromotionsController@create',
        'middleware' => ['permission:promotions-create']]);
    Route::post('admin/promotions/store',['as'=>'admin.promotions.store',
        'uses'=>'PromotionsController@store',
        'middleware' => ['permission:promotions-create']]);
    Route::get('admin/promotions/{id}',['as'=>'admin.promotions.show',
        'uses'=>'PromotionsController@show']);
    Route::get('admin/promotions/{id}/edit',['as'=>'admin.promotions.edit',
        'uses'=>'PromotionsController@edit',
        'middleware' => ['permission:promotions-edit']]);
    Route::patch('admin/promotions/{id}',['as'=>'admin.promotions.update',
        'uses'=>'PromotionsController@update',
        'middleware' => ['permission:promotions-edit']]);
    Route::delete('admin/promotions/{id}',['as'=>'admin.promotions.destroy',
        'uses'=>'PromotionsController@destroy',
        'middleware' => ['permission:promotions-delete']]);

    //Sessions routes
    Route::get('admin/sessions', ['as'=>'admin.sessions.index',
        'uses'=>'SessionsController@index',
        'middleware' => ['permission:sessions-list|sessions-create|sessions-edit|sessions-delete'],
    ]);
    Route::get('admin/sessions/create',['as'=>'admin.sessions.create',
        'uses'=>'SessionsController@create',
        'middleware' => ['permission:sessions-create']]);
    Route::post('admin/sessions/store',['as'=>'admin.sessions.store',
        'uses'=>'SessionsController@store',
        'middleware' => ['permission:sessions-create']]);
    Route::get('admin/sessions/{id}',['as'=>'admin.sessions.show',
        'uses'=>'SessionsController@show']);
    Route::get('admin/sessions/{id}/edit',['as'=>'admin.sessions.edit',
        'uses'=>'SessionsController@edit',
        'middleware' => ['permission:sessions-edit']]);
    Route::patch('admin/sessions/{id}',['as'=>'admin.sessions.update',
        'uses'=>'SessionsController@update',
        'middleware' => ['permission:sessions-edit']]);
    Route::delete('admin/sessions/{id}',['as'=>'admin.sessions.destroy',
        'uses'=>'SessionsController@destroy',
        'middleware' => ['permission:sessions-delete']]);

    //ShippingCosts routes
    Route::get('admin/shipping_costs', ['as'=>'admin.shipping_costs.index',
        'uses'=>'ShippingCostsController@index',
        'middleware' => ['permission:shipping_costs-list|shipping_costs-create|shipping_costs-edit|shipping_costs-delete'],
    ]);
    Route::get('admin/shipping_costs/create',['as'=>'admin.shipping_costs.create',
        'uses'=>'ShippingCostsController@create',
        'middleware' => ['permission:shipping_costs-create']]);
    Route::post('admin/shipping_costs/store',['as'=>'admin.shipping_costs.store',
        'uses'=>'ShippingCostsController@store',
        'middleware' => ['permission:shipping_costs-create']]);
    Route::get('admin/shipping_costs/{id}',['as'=>'admin.shipping_costs.show',
        'uses'=>'ShippingCostsController@show']);
    Route::get('admin/shipping_costs/{id}/edit',['as'=>'admin.shipping_costs.edit',
        'uses'=>'ShippingCostsController@edit',
        'middleware' => ['permission:shipping_costs-edit']]);
    Route::patch('admin/shipping_costs/{id}',['as'=>'admin.shipping_costs.update',
        'uses'=>'ShippingCostsController@update',
        'middleware' => ['permission:shipping_costs-edit']]);
    Route::delete('admin/shipping_costs/{id}',['as'=>'admin.shipping_costs.destroy',
        'uses'=>'ShippingCostsController@destroy',
        'middleware' => ['permission:shipping_costs-delete']]);

    //Sliders routes
    Route::get('admin/sliders', ['as'=>'admin.sliders.index',
        'uses'=>'SlidersController@index',
        'middleware' => ['permission:sliders-list|sliders-create|sliders-edit|sliders-delete'],
    ]);
    Route::get('admin/sliders/create',['as'=>'admin.sliders.create',
        'uses'=>'SlidersController@create',
        'middleware' => ['permission:sliders-create']]);
    Route::post('admin/sliders/store',['as'=>'admin.sliders.store',
        'uses'=>'SlidersController@store',
        'middleware' => ['permission:sliders-create']]);
    Route::get('admin/sliders/{id}',['as'=>'admin.sliders.show',
        'uses'=>'SlidersController@show']);
    Route::get('admin/sliders/{id}/edit',['as'=>'admin.sliders.edit',
        'uses'=>'SlidersController@edit',
        'middleware' => ['permission:sliders-edit']]);
    Route::patch('admin/sliders/{id}',['as'=>'admin.sliders.update',
        'uses'=>'SlidersController@update',
        'middleware' => ['permission:sliders-edit']]);
    Route::delete('admin/sliders/{id}',['as'=>'admin.sliders.destroy',
        'uses'=>'SlidersController@destroy',
        'middleware' => ['permission:sliders-delete']]);
});
