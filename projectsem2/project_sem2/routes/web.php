<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::group(['prefix' => '/index'], function () {
    Route::get('/', 'layout\homeController@index')->name('index');

    Route::get('/add_to_cart/{id_product}', 'layout\homeController@addtocart')->name('addtocart');

    Route::get('/shoppingCart', 'layout\homeController@shoppingCart')->name('shoppingCart');

    Route::get('/productDetail/{id_product}', 'layout\homeController@productDetail')->name('productDetail');

    Route::get('/shopGrid', 'layout\homeController@ViewShopGrid')->name('shopGrid');

    Route::get('/categoryDetail/{id_category}', 'layout\homeController@categoryDetail')->name('categoryDetail');

    Route::post('/checkQuantityProduct', 'layout\homeController@checkQuantityProduct')->name('checkQuantityProduct');
    Route::get('/blog',function ()
    {
        return view('super-market.pages.blog.blog');
    })->name('blog');


    //route của người dùng
    Route::get('/infor_user', 'layout\homeController@infor_user')->name('infor_user');
    //ng dùng tự update thông tin
    Route::post('/updateInformation_user', 'layout\homeController@updateInformation_user')->name('updateInformation_user');

    // //search
    // Route::get('search', 'layout\homeController@getSearch');
    Route::post('search/name', 'layout\homeController@getSearchAjax')->name('search');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('checkPermission');
Route::post('test_logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout_exit');
