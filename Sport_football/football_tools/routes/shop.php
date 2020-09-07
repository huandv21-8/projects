<?php

use Illuminate\Support\Facades\Route;


Route::get('/','shop\homeController@index')->name('home');

Route::group(['prefix' => '/shop.huandv'], function () {

    Route::get('/shop','shop\shopController@showProduct')->name('shop');


    Route::post('/productList','shop\shopController@productList')->name('productList');

});










