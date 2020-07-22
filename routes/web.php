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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get("/profile", "HomeController@profile");
Route::post("/profile/{id}", "HomeController@profileUpdate");
Route::get("/profileEdit", "HomeController@profileEdit");

Route::get("/product/{id}", "HomeController@productShow");
Route::post("/addtocart/{id}", "HomeController@addToCart");
Route::get("/cart", "HomeController@cart");
Route::post("/clearcart/{userId}", "HomeController@clearCart");

Route::resource("/admin/product", "ProductController");
