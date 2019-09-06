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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 Route::get('ajax-form-submit', 'FormController@index');
 Route::post('save-form', 'FormController@store');
// Route::Resource('/products', 'ProductController');

 Route::get('addproduct','NewController@create');
Route::get('my-form','NewController@myform');
Route::post('my-form','NewController@myformPost');
