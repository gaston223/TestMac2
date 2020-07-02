<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'UsersFormController@home')->name('users_home');
Route::get('/show', 'UsersFormController@show')->name('users_show');
Route::post('/store-users', 'UsersFormController@store')->name('users_store_form');
Route::put('/update-users', 'UsersFormController@update')->name('users_update_form');

Route::middleware(['auth'])->group(function (){
    Route::get('/edit/{user}', 'UsersFormController@edit')->name('users_edit_info');
});

Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('admin', 'AdminController@home')->name('admin_home');
    Route::get('admin/show/{user}', 'AdminController@showProfile')->name('admin_show');
    Route::get('admin/edit/{user}', 'AdminController@editProfile')->name('admin_edit');
    Route::put('admin/update-profil-user/{user}', 'AdminController@update')->name('admin_update_profil');

});
