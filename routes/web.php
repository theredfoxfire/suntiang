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
    Route::resource('admin/users','UserController');
    Route::resource('admin/post', 'PostController', ['except' => 'show']);
    Route::resource('admin/tag', 'TagController', ['except' => 'show']);

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

    Route::get('admin/itemCRUD2',['as'=>'admin.itemCRUD2.index',
        'uses'=>'ItemCRUD2Controller@index',
        'middleware' => ['permission:item-list|item-create|item-edit|item-delete'],
        ]);
    Route::get('admin/itemCRUD2/create',['as'=>'admin.itemCRUD2.create',
        'uses'=>'ItemCRUD2Controller@create',
        'middleware' => ['permission:item-create']]);
    Route::post('admin/itemCRUD2/create',['as'=>'admin.itemCRUD2.store',
        'uses'=>'ItemCRUD2Controller@store',
        'middleware' => ['permission:item-create']]);
    Route::get('admin/itemCRUD2/{id}',['as'=>'admin.itemCRUD2.show',
        'uses'=>'ItemCRUD2Controller@show']);
    Route::get('admin/itemCRUD2/{id}/edit',['as'=>'admin.itemCRUD2.edit',
        'uses'=>'ItemCRUD2Controller@edit',
        'middleware' => ['permission:item-edit']]);
    Route::patch('admin/itemCRUD2/{id}',['as'=>'admin.itemCRUD2.update',
        'uses'=>'ItemCRUD2Controller@update',
        'middleware' => ['permission:item-edit']]);
    Route::delete('admin/itemCRUD2/{id}',['as'=>'admin.itemCRUD2.destroy',
        'uses'=>'ItemCRUD2Controller@destroy',
        'middleware' => ['permission:item-delete']]);

    Route::get('admin/upload', 'UploadController@index');
    Route::post('admin/upload/file', 'UploadController@uploadFile');
    Route::delete('admin/upload/file', 'UploadController@deleteFile');
    Route::post('admin/upload/folder', 'UploadController@createFolder');
    Route::delete('admin/upload/folder', 'UploadController@deleteFolder');
    Route::post('admin/post/store', 'PostController@store')->name('admin.post.store');
    Route::post('admin/post', 'PostController@index')->name('admin.post.index');
    Route::put('admin/post/update/{id}', 'PostController@update')->name('admin.post.update');
    Route::delete('admin/post/destroy/{id}', 'PostController@destroy')->name('admin.post.destroy');
    Route::get('admin/users', 'UserController@index')->name('admin.users.index');
    Route::get('admin/users/edit', 'UserController@edit')->name('admin.users.edit');
});
