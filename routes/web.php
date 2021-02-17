<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


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

Route::get('/', function(){
    return view('welcome');
});

// show all products
Route::get('/products', 'ProductController@index')->name('allproducts');

// display single product
Route::get('/products/{id}','ProductController@show')->name('singleProduct');

// create product form 
Route::get('/addproducts','ProductController@add')->name('addProducts');

// store data
Route::post('/store','ProductController@store')->name('storeproducts');

// edit form
Route::get('/editproduct/{id}','ProductController@edit')->name('editproduct');

// update product
Route::post('/update/{id}','ProductController@update')->name('updateproduct');

// delete 
Route::get('delete/{id}','ProductController@delete')->name('deleteproduct');