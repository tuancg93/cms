<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/13/2019
 * Time: 10:48 AM
 */
Auth::routes();
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login','Auth\LoginController@login');
});
