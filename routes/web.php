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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index')->name('index');

Route::get('/product/{id}', 'ProductController@index')->name('product');

Route::get('/category', 'CategoryController@index')->name('category');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('/user', 'UserPageController@index')->name('user');
Route::get('/commandes', 'UserPageController@commandes')->name('commandes_user');
Route::post('/user/changeavatar', 'UserPageController@changeAvatar')->name('changeAvatar');
Route::post('/user/changedata', 'UserPageController@changeData')->name('changeData');

Route::get('/contact','ContactController@index')->name('contact');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/ideabox', 'IdeaboxController@index')->name('ideabox');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::post('/cart/add/{id}', 'CartController@add')->name('addtocart');

Route::post('/cart/remove/{id}', 'CartController@remove')->name('removefromcart');

Route::post('/cart/order/{type}', 'CartController@order')->name('order');

Route::get('/cart/payment', 'PaymentController@index')->name('payment');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/dashboard/command', 'DashcommandController@index')->name('dashcommand');

Route::post('/dashboard/command/changestatus/{id}', 'DashcommandController@changeStatus')->name('ChangeStatusCommand');

Route::post('/dashboard/product/changeinfo/{id}', 'manageproductController@changeInfo')->name('ChangeInfoProduct');

Route::post('/dashboard/product/addinfo/', 'manageproductController@addProduct')->name('AddProduct');

Route::get('/dashboard/pastcommand', 'pastcommandController@index')->name('pastcommand');

Route::get('/dashboard/manageproduct', 'manageproductController@index')->name('manageproduct');

Route::get('/dashboard/manageevent', 'manageeventController@index')->name('manageevent');

Route::get('/dashboard/manageaccount', 'manageaccountController@index')->name('manageaccount');