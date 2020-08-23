<?php

use Illuminate\Support\Facades\Route;



//đây ko pải code của bạn ^^ xin đừng sờ
Route::middleware(['auth'])->group(function () {
    
        Route::group(['prefix' => 'admin'], function () {
        Route::get('/users', 'admin\usersController@index')->name('show_user')->middleware('checkPermission');
        Route::get('/editUsers', 'admin\usersController@edit_user')->name('admin.edituser');
        Route::post('/updateUsers', 'admin\usersController@updateUser')->name('update_user');
        Route::get('/viewUsers', 'admin\usersController@viewUsers')->name('view_user');
        Route::get('/addUser', 'admin\usersController@addUser')->name('add_user');
        Route::post('/insertUser', 'admin\usersController@insertUser')->name('insertUser');
        Route::get('/homeAdmin', 'admin\homeAdminController@homeAdmin')->name('homeAdmin')->middleware('checkPermission');;
        Route::post('/deletedUser', 'admin\usersController@deletedUser')->name('deletedUser');
    });

    
    Route::group(['prefix' => 'admin/Roles'], function () {
        Route::get('/show', 'admin\RolesController@showRoles')->name('show_Roles');
        Route::get('/update', 'admin\RolesController@updateRoles')->name('update_Roles');
        Route::post('/getUpdate', 'admin\RolesController@receive_update')->name('receive_update');
        Route::get('/addRoles', 'admin\RolesController@addRoles')->name('addRoles');
        Route::post('/insertRoles', 'admin\RolesController@insertRoles')->name('insertRoles');
        Route::post('/deletedRoles', 'admin\RolesController@deletedRoles')->name('deletedRoles');
    });
});
Route::get('/ahjhj', 'admin\usersController@ahjhj')->name('ahjhj');
