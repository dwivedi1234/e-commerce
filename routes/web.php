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

// admin-category-route
Route::get('/create/category','CategoryController@create')->name('createform')->middleware('auth');
Route::post('/store/category','CategoryController@store')->name('storecategory')->middleware('auth');
Route::get('/edit/category/{id}','CategoryController@edit')->name('editcategory')->middleware('auth');
Route::post('/update/category','CategoryController@update')->name('updatecategory')->middleware('auth');
Route::get('/delete/category/{id}','CategoryController@delete')->name('deletecategory')->middleware('auth');


// admin-brand-route
Route::get('/create/brand','BrandController@create')->name('createbrand')->middleware('auth');
Route::post('/store/brand','BrandController@store')->name('storebrand')->middleware('auth');
Route::get('/edit/brand/{id}','BrandController@edit')->name('editbrand')->middleware('auth');
Route::post('/update/brand/{id}','BrandController@update')->name('updatebrand')->middleware('auth');
Route::get('/delete/brand/{id}','BrandController@delete')->name('deletebrand')->middleware('auth');

// productroute
Route::get('/create/product','ProductController@create')->name('createproduct')->middleware('auth');
Route::post('/store/product','ProductController@store')->name('storeproduct')->middleware('auth');
Route::get('/all/product','ProductController@allproduct')->name('allproduct')->middleware('auth');
Route::get('/edit/product/{id}','ProductController@editproduct')->name('editproduct')->middleware('auth');
Route::get('/delete/product/{id}','ProductController@delete')->name('deleteproduct')->middleware('auth');
Route::post('/update/product/{id}','ProductController@updateproduct')->name('updateproduct')->middleware('auth');


// checkout
Route::get('/checkout','CheckoutController@checkout')->name('checkout')->middleware('auth');
Route::post('/order/address','CheckoutController@storeaddress')->name('orderaddress')->middleware('auth');




// frontroute
Route::get('/', 'FrontController@index')->name('homepage');
Route::get('/product/detail/{id}/{slug}','Front\ProductController@detail')->name('productdetail');
Route::get('/add/cart/{id}/{quantity}','Front\ProductController@addToCart')->name('addToCart');
Route::get('show/cart','Front\ProductController@showCart')->name('showCart');




// authroutes
Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');



Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard')->middleware('role:admin');

