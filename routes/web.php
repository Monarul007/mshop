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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'PagesController@contact')->name('pages.contact');
Route::get('/about', 'PagesController@about')->name('pages.about');
Route::get('/shop', 'PagesController@shop')->name('pages.shop');
Route::get('/cart', 'PagesController@cart')->name('pages.cart');
Route::get('/checkout', 'PagesController@checkout')->name('pages.checkout');
Route::get('/product/{id}', 'ProductsController@view')->name('products.details');

Route::group(['middleware' => ['auth']], function(){

    Route::get('/submit-design', 'PagesController@requestDesign')->name('pages.submit.design');
    Route::get('/my-account', 'CustomersController@myaccount')->name('customers.account');
    Route::get('/order-history', 'CustomersController@orderHistory')->name('customers.orders.history');
    Route::get('/edit-account', 'CustomersController@editProfile')->name('customers.edit.profile');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
