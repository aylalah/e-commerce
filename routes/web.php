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


// fornt
Route::get('/', 'RoutingController@front');

//user front
Route::get('Product_details/{id}', 'RoutingController@product_details')->name('prod_details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user_category
Route::get('/home', 'HomeController@home_categ')->name('home_categ');

//end front

// back
Route::get('/Dashboard', 'RoutingController@dashboard');
Route::get('/Product', 'RoutingController@add_product')->name('add_product');
Route::resource('/view_product', 'ProductController');
Route::get('edit_product/{id}', 'ProductController@edit')->name('product.edit');
Route::get('destroy_product/{id}', 'ProductController@destroy')->name('product.delete');
// end back

// add to cart start
Route::POST('/cart_add', 'CartController@cart');
Route::get('/cart_show', 'CartController@cartshow');
Route::POST('/update_cart', 'CartController@update_cart');
Route::get('/delete-cart/{Id}', 'CartController@deletecart');
//end cart