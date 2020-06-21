<?php

use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
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

// dashboard route
Route::get('admin.dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('admin.dashboard', 'DashboardController@productsTable')->name('dashboard');

// pages route
Route::get('pages.index', 'HomeController@index')->name('Game Art');
Route::get('pages.about', 'AboutController@about')->name('About Us');
Route::get('pages.market', 'MarketController@market')->name('market');

// contact route
Route::get('contact', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store')->name('contact.store');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

// User route
Route::get('profile', 'UsersController@profile')->name('userProfile');
Route::get('admin.users.edit', 'UsersController@editUsers')->name('users.edit');


// Profile routes
Route::post('admin/profile.index', 'UsersController@updateAvatar')->name('updateAvatar');


// categories route
Route::get('categories', 'CategoriesController@index')->name('categories');
Route::get('categories/{id}', 'CategoriesController@show')->name('categories');

// products route
Route::get('admin/product.create', 'ProductsController@index')->name('Product');
Route::post('admin/product', 'ProductsController@store')->name('Create');

Route::post('/admin/product.viewproduct/{id}', 'DiscussionController@store')->name('discussion.store');

Route::get('admin/product.viewproduct', 'MarketController@product')->name('ViewProduct');
Route::get('/admin/product.viewproduct/{id}', 'MarketController@viewproduct')->name('DetailProduct');
Route::get('admin/product.addToCart/{product}', 'ProductsController@addToCart')->name('cart.add');

// cart route
Route::get('/shoping-cart', 'ProductsController@showCart')->name('cart.show');
Route::get('/purchase.index', 'ProductsController@download')->name('down.show');
Route::get('/checkout/{amount}', 'ProductsController@checkout')->name('cart.checkout')->middleware('auth');
Route::post('/charge', 'ProductsController@charge')->name('cart.charge');
Route::delete('admin/product/{product}', 'ProductsController@destroy')->name('product.remove');

Route::resource('product', 'ProductsController');
Route::resource('category', 'ProductsController');

// Purchase route
Route::get('/purchases', 'PurchaseController@index')->name('purchase.index');
