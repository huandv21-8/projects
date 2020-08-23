<?php


use Illuminate\Support\Facades\Route;


Route::get('/report', 'admin\reportController@report')->name('report');

