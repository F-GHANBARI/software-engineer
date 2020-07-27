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
Auth::routes();

Route::get('/','HomeController@home')->name('home');
Route::get('/product/show/{product}','HomeController@show')->name('single.product.show');
Route::get('/about_us','HomeController@about')->name('about');
Route::get('/contact','HomeController@contact')->name('contact');
Route::get('/search','HomeController@search')->name('search');
Route::get('/edit/profile/{user}','Front\UserController@edit')->name('user.edit.front');
Route::put('/update/profile/{user}','Front\UserController@update')->name('user.update.front');


Route::prefix('admins')->namespace('Admin')->group(function (){
    Route::resource('/product','ProductsController');
    Route::resource('/user','UsersController');
    Route::resource('/setting','SettingController');
    Route::get('/','UsersController@Admin')->name('Admin.index');
    Route::Post('/update/status/user/{user}','UsersController@update_status')->name('update.status.user');
    Route::Post('/update/status/product/{product}','ProductsController@update_status')->name('update.status.product');
});

Route::prefix('/product')->namespace('Front')->group(function (){
    Route::resource('/cart','CartsController');
    Route::resource('/cart_item','Carts_ItemsController');
});



//Route::get('/products',function (){
//   return view('product');
//});
//Route::get('/shop',function (){
//   return view('shop');
//});
