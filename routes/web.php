<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('pages/index');
});

Auth::routes();

Route::get('admin.dashboard', 'DashboardController@dashboard')->name('dashboard');

// pages route
Route::get('pages.index', 'HomeController@index')->name('Game Art');
Route::get('pages.about', 'AboutController@about')->name('About Us');
Route::get('pages.market', 'MarketController@market')->name('market');

// contact route
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');


Route::namespace('Admin')->prefix('admin')->name('admin')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    // Route::group(['middleware' => ['admin']], function () {
    //     Route::get('admin.dashboard', 'AdminController@dashboard');
    // });
});


// categories route
Route::get('categories', 'CategoriesController@index')->name('categories');
Route::get('categories/{id}', 'CategoriesController@show')->name('categories');

// products route
Route::get('admin/product.create', 'ProductsController@index')->name('Product');
Route::post('admin/product', 'ProductsController@store')->name('Create');

Route::post('/admin/product.viewproduct/{id}', 'CommentsController@store')->name('comments.store');

Route::get('admin/product.viewproduct', 'MarketController@product')->name('ViewProduct');
Route::get('/admin/product.viewproduct/{id}', 'MarketController@viewproduct')->name('DetailProduct');
Route::get('admin/product.addToCart/{product}', 'ProductsController@addToCart')->name('cart.add');

// cart route
Route::get('/shoping-cart', 'ProductsController@showCart')->name('cart.show');
Route::get('/shoping-cart/{id}', 'ProductsController@show')->name('down.show');
Route::get('/checkout/{amount}', 'ProductsController@checkout')->name('cart.checkout')->middleware('auth');
Route::post('/charge', 'ProductsController@charge')->name('cart.charge');
Route::delete('admin/product/{product}', 'ProductsController@destroy')->name('product.remove');

Route::resource('product', 'ProductsController');
Route::resource('category', 'ProductsController');

// Purchase route
Route::get('/purchases', 'PurchaseController@index')->name('purchase.index');
