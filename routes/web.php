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

// SHOP
Route::get('/', function () {
    return Redirect::to('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'HomeController@show')->name('show');


// PRODUCT
Route::get('/admin/dashboard', 'ProductController@index')->name('admin.dashboard');
Route::get('/admin/add', 'ProductController@create')->name('admin.add');
Route::post('/admin/store', 'ProductController@store')->name('admin.store');
Route::get('/admin/{id}/edit', 'ProductController@edit')->name('admin.edit');
Route::put('/admin/{id}/update', 'ProductController@update')->name('admin.update');
Route::get('/admin/{id}/destroy', 'ProductController@destroy')->name('admin.delete');

Auth::routes();
Route::get('/logout', function() {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

