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
Route::post('/storeproducts','ProductController@store')->name('storeproducts');

// edit form
Route::get('/editproduct/{id}','ProductController@edit')->name('editproduct');

// update product
Route::post('/update/{id}','ProductController@update')->name('updateproduct');

// delete 
Route::get('delete/{id}','ProductController@delete')->name('deleteproduct');

// categories routes
// show all categories
Route::get('/categories','CategoryController@index')->name('allcategories');

// display single category
Route::get('/category/{id}','CategoryController@show')->name('singlecategory');

// create category
Route::get('/addcategories','CategoryController@create')->name('addcategories');

// store category
Route::post('/storecategories','CategoryController@store')->name('storecategories');

// edit category
Route::get('/editcategories/{id}','CategoryController@edit')->name('editcategories');

// update category
Route::post('/updatecategories/{id}','CategoryController@update')->name('updatecategories');

// delete category
Route::get('/deletecategory/{id}','CategoryController@delete')->name('deletecategory');