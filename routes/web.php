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
    return view('welcome');
});

Route::get('/what', [
    'uses' => 'views@what',
    'as' => 'what',
]);
Route::get('/about', [
    'uses' => 'views@about',
    'as' => 'about',
]);
Route::get('/products', [
    'uses' => 'views@products',
    'as' => 'products',
]);
Route::get('/go', [
    'uses' => 'views@go',
    'as' => 'go',
]);
Route::get('/lg', [
    'uses' => 'views@lg',
    'as' => 'lg',
]);
Route::post('/DeleteProduct',[
  'uses'=>'functions@DeleteProduct',
  'as'=>'DeleteProduct'
]);
Route::post('/Affiliate_Link', [
    'uses' => 'functions@add_Product_Listing',
    'as' => 'Affiliate_Link',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
