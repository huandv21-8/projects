<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin_order', 'admin\OrderController@admin_order')->name('admin_order');
Route::get('/orderDetail', 'admin\OrderController@orderDetail')->name('orderDetail');
Route::post('/update_orderDetail', 'admin\OrderController@update_orderDetail')->name('update_orderDetail');