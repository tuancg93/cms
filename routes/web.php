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

Route::group([
   /* 'middleware' => 'auth'*/
    'prefix' => 'admin'
], function () {

    Route::resource('category', 'Admin\CategoryController');
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