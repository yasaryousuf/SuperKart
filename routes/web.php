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
    return view('frontend.home.home_content');
});
Route::get('category', function () {
    return view('frontend.category.category');
});
Auth::routes();

Route::get('/home', 'HomeController@index');

/* Category Routes */

Route::get('add-category', 'CategoryController@createCategory');
Route::post('new-category', 'CategoryController@storeCategory');
Route::get('manage-category', 'CategoryController@showCategory');
Route::get('delete-category/{id}', 'CategoryController@deleteCategory');
Route::get('edit-category/{id}', 'CategoryController@editCategory');
Route::post('update-category/', 'CategoryController@updateCategory');

/* Manufecturer Routes */

Route::get('add-manufacturer', 'ManufacturerController@createManufacturer');
Route::post('new-manufacturer', 'ManufacturerController@storeManufacturer');
Route::get('manage-manufacturer', 'ManufacturerController@showManufacturer');
Route::get('delete-manufacturer/{id}', 'ManufacturerController@deleteManufacturer');
Route::get('edit-manufacturer/{id}', 'ManufacturerController@editManufacturer');
Route::post('update-manufacturer/', 'ManufacturerController@updateManufacturer');

/* Product Routes */

Route::get('add-product', 'ProductController@createProduct');
Route::post('new-product', 'ProductController@storeProduct');
Route::get('manage-product', 'ProductController@showProduct');
Route::get('view-product/{id}', 'ProductController@viewProduct');
Route::get('delete-product/{id}', 'ProductController@deleteProduct');
Route::get('edit-product/{id}', 'ProductController@editProduct');
Route::post('update-product/', 'ProductController@updateProduct');