<?php


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/category'], function () { 

    // day này anh  category 
    // name kia chỉ là tên còn nó hiện ở cái api phải là category chứ ko phải là  categoryList

    //show danh muc
    Route::get('/', 'admin\category_manageController@categoryList')->name('categoryList');
    //xem chi tiet danh muc
    Route::get('/view', 'admin\category_manageController@view_category')->name('view_category');
    //them danh muc
    Route::get('/add', 'admin\category_manageController@add_category1')->name('add_category');
    Route::post('/add2', 'admin\category_manageController@add_category2')->name('add_category2');

    //sua danh muc
    Route::get('/edit/{id_category}', 'admin\category_manageController@edit_category')->name('edit_category');
    Route::post('/edit', 'admin\category_manageController@edit_category2')->name('edit_category2');

    Route::get('/delete/{id_category}', 'admin\category_manageController@delete_category')->name('delete_category');
});


Route::group(['prefix' => '/product'], function () {
    //show product
    Route::get('/', 'admin\category_manageController@productList')->name('productList');
    //view product
    Route::get('/view_product', 'admin\category_manageController@view_product')->name('view_product');

    //them san pham
    Route::get('/add', 'admin\category_manageController@add_product')->name('add_product');
    Route::post('/add2', 'admin\category_manageController@add_product2')->name('add_product2');

    //sua san pham
    Route::get('/edit', 'admin\category_manageController@edit_product')->name('edit_product');
    Route::post('/edit', 'admin\category_manageController@edit_product2')->name('edit_product2');

    //delete san pham
    Route::get('/delete', 'admin\category_manageController@delete_product')->name('delete_product');
});
