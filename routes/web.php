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
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');
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
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);

    // Upload Routes
    Route::get('admin/upload', 'UploadController@index');
    Route::post('admin/upload/file', 'UploadController@uploadFile');
    Route::delete('admin/upload/file', 'UploadController@deleteFile');
    Route::post('admin/upload/folder', 'UploadController@createFolder');
    Route::delete('admin/upload/folder', 'UploadController@deleteFolder');

    // Posts routes
    Route::resource('admin/post', 'PostController', ['except' => 'show']);
    Route::post('admin/post/store', 'PostController@store')->name('admin.post.store');
    Route::post('admin/post', 'PostController@index')->name('admin.post.index');
    Route::put('admin/post/update/{id}', 'PostController@update')->name('admin.post.update');
    Route::delete('admin/post/destroy/{id}', 'PostController@destroy')->name('admin.post.destroy');

    // Users Routes
    Route::resource('admin/users','UserController');
    Route::get('admin/users', 'UserController@index')->name('admin.users.index');
    Route::get('admin/users/edit', 'UserController@edit')->name('admin.users.edit');
    Route::delete('admin/users/{id}', 'UserController@destroy')->name('admin.users.delete');

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

    //DeliveryTrackings routes
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
});
