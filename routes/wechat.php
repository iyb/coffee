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

Route::group(['prefix'=>'office'], function () {
    Route::get('serve', 'OfficeController@serve');
});

Route::group(['prefix'=>'work'], function () {
    Route::get('serve', 'WorkController@serve');
});

Route::group(['prefix'=>'mini'], function () {
    Route::get('serve', 'MiniController@serve');
});

Route::group(['prefix'=>'payment'], function () {
    Route::get('/', function() {
        return 'payment';
    });
});

Route::group(['prefix'=>'open'], function () {
    Route::get('/', function() {
        return 'open';
    });
});