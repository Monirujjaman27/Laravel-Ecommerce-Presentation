<?php
use  App\Http\Controllers\Backend;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/* Frontend Routes
*SiteController is define hare
*/
Route::get('/', 'Frontend\SiteController@index')->name('index');
Route::get('/Product-details', 'Frontend\SiteController@ProductDetails')->name('ProductDetails');
Route::get('/category-product/{catId}', 'Frontend\SiteController@categryPorduct')->name('categryPorduct');

/* 
* authontication Routes 
*Authentication Route Is define hare
*/
Auth::routes();

 /* Admin Routes
  */
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/user/new-user', 'Auth\RegisterController@showregistrationForm')->name('showregistrationForm');


// Brands Route..
Route::group(['prefix' => '/brand'], function(){
    Route::get('/add-brand', 'Backend\BrandController@add_brand')->name('add-brand');
    Route::post('/save-brand', 'Backend\BrandController@save_brand')->name('save-brand');
    Route::get('/manage-brand', 'Backend\BrandController@manage_brand')->name('manage-brand');

    Route::get('/manage-brand/edit_brand/{id}', 'Backend\BrandController@edit_brand')->name('edit_brand');
    Route::post('/manage-brand/update_brand/{id}', 'Backend\BrandController@update_brand')->name('update_brand');

    Route::get('/manage-brand/delete_brand/{id}', 'Backend\BrandController@delete_brand')->name('delete_brand');
});

/* 
*category Routes
* All  Category  Routes is   include hare
*
*/
Route::group(['prefix' => '/category'], function(){

     Route::get('/manage-category', 'Backend\CategoryController@manage_category')->name('manage_category');
     Route::get('/data', 'Backend\CategoryController@get_data')->name('get_data');
     Route::post('/store', 'Backend\CategoryController@store')->name('store');
     Route::post('/update', 'Backend\CategoryController@update')->name('update');
     Route::post('/delete', 'Backend\CategoryController@delete')->name('delete');



//     Route::get('/manage-category', 'Backend\CategoryController@manage_category')->name('manage-category');
//     Route::get('/getdata', 'Backend\CategoryController@getdata')->name('getdata');
//     Route::get('/add-category', 'Backend\CategoryController@add_category')->name('add-category');
//     Route::post('/save-category', 'Backend\CategoryController@save_category')->name('save-category');

//  //   Route::get('/manage-category/edit_category/{id}', 'Backend\CategoryController@edit_category')->name('edit_category');
//     Route::get('/manage-category/edit_category/{id}', 'Backend\CategoryController@update_category')->name('edit_category');

//     Route::get('/manage-category/delete_category/{id}', 'Backend\CategoryController@delete_category')->name('delete_category');
});

    /*
    | product Routes
    | product  ALl Routes is   include hare
    |
    */

Route::group(['prefix' => '/product'], function(){
    Route::get('/add_product', 'Backend\ProductController@add_product')->name('add_product');
    Route::post('/save_product', 'Backend\ProductController@save_product')->name('save_product');
    Route::get('/manage_product', 'Backend\ProductController@manage_product')->name('manage_product');

    Route::get('/manage-product/edit_product/{id}', 'Backend\ProductController@edit_product')->name('edit_product');
    //Route::post('/manage-product/update_product/{id}', 'Backend\ProductController@update_product')->name('update_product');

    Route::get('/manage-product/delete_product/{id}', 'Backend\ProductController@delete_product')->name('delete_product');
    // product status active or inactive 
    Route::get('/manage-product/aToInactive/{id}', 'Backend\ProductController@aToInactive')->name('aToInactive');
    Route::get('/manage-product/inToAtive/{id}', 'Backend\ProductController@inToAtive')->name('inToAtive');
    // Product show in front page 
    Route::get('/product/{slug}', 'Backend\ProductController@showproduct')->name('showproduct');

});
