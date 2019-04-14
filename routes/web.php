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
include ('auth/auth.php');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'admin'
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('category', 'Admin\CategoryController');
});
