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

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('products','ProductController@store')->name('products.store');
Route::post('productsupdate','ProductController@update')->name('productsupdate');
Route::post('productsdelete','ProductController@destroy')->name('productsdelete');
Route::get('productsindex','ProductController@index')->name('productsindex');
Route::get('/home','ProductController@show');
//Route::get('create/{id}', 'ProductController@edit');

Route::resource('contacts', 'ProductController');

/*Route::post('create', function (Request $request) {
   echo($request->all());
    return View::make('create')->with('id', $request);
})->name('create');*/