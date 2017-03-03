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

// Admin area
Route::get('admin', function () {
  return redirect('/admin/post');
});

Route::group([
  'namespace' => 'Admin',
  'middleware' => ['web', 'auth'],
], function () {
  Route::resource('admin/post', 'PostController', ['except' => 'show']);
  Route::resource('admin/tag', 'TagController', ['except' => 'show']);
  Route::get('admin/upload', 'UploadController@index');
  Route::post('admin/upload/file', 'UploadController@uploadFile');
  Route::delete('admin/upload/file', 'UploadController@deleteFile');
  Route::post('admin/upload/folder', 'UploadController@createFolder');
  Route::delete('admin/upload/folder', 'UploadController@deleteFolder');
  Route::post('admin/post/store', 'PostController@store')->name('admin.post.store');
  Route::post('admin/post', 'PostController@index')->name('admin.post.index');
  Route::put('admin/post/update/{id}', 'PostController@update')->name('admin.post.update');
  Route::delete('admin/post/destroy/{id}', 'PostController@destroy')->name('admin.post.destroy');
});

// Logging in and out
Route::get('/login', 'Auth\AuthController@getLogin')->name('login');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

Auth::routes();

Route::get('/home', 'HomeController@index');
