<?php
Route::get('/checkout','layout\checkOutController@viewCheckout')->name('layout-checkout');

Route::post('/payment','layout\checkOutController@payment')->name('payment');
Route::post('/deleted_order','layout\checkOutController@deleted_order')->name('deleted_order');
