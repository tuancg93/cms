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
Auth::routes();
Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::resource('category', 'Admin\CategoryController');

    Route::group([
        'prefix' => 'user'
    ], function () {
        Route::get('/', 'Admin\UserController@index')->name('user.index');
        Route::get('/add', 'Admin\UserController@addHtml')->name('user.addHtml');
        Route::post('/addAction', 'Admin\UserController@addAction')->name('user.addAction');
        Route::get('/edit/{id}', 'Admin\UserController@editHtml')->name('user.editHtml');
        Route::post('/editAction/{id}', 'Admin\UserController@editAction')->name('user.editAction');
        Route::get('/view/{id}', 'Admin\UserController@view')->name('user.view');
        Route::get('/profile/{id}', 'Admin\UserController@profileHtml')->name('user.profileHtml');
        Route::get('/delete', 'Admin\UserController@delete')->name('user.delete');
    });

    Route::group([
        /* 'middleware' => 'auth'*/
        'prefix' => 'media'
    ], function () {

        Route::get('/', 'Admin\UploadImagesController@create');
        Route::post('/images-save', 'Admin\UploadImagesController@store')->name('image.create');
        Route::post('/images-delete', 'Admin\UploadImagesController@destroy');
        Route::get('/images-show', 'Admin\UploadImagesController@index');
        Route::get('/modal', 'Admin\UploadImagesController@modal')->name('image.modal');


    });


});