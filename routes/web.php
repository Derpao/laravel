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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/live1', 'liveController@live1');
Route::get('/live2', 'liveController@live2');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLogingForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/table_edits', 'LiveAmdinTableController@AdminTableEdit')->name('admin.table_edit');
    Route::resource('/item-ajax', 'LiveAmdinTableController');
});
