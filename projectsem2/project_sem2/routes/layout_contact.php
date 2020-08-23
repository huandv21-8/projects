<?php
Route::get('contact_user', 'layout\contactController@contact')->name('contact'); 
Route::post('recieve_content', 'layout\contactController@recieve_content')->name('recieve_content'); 


// check validate
Route::get('form1', 'validate@showform')->name('showform');
Route::post('getdata', 'validate@getdata')->name('getdata');