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

Route::get('/', 'homeController@index');
Route::get('/service/{slug}', 'homeController@show')->name("service.show");
Route::get('/prices', 'pricesController@index')->name('prices');
Route::get('/reviews', 'reviewsController@index')->name('reviews');
Route::post('/reviews', 'reviewsController@store')->name('comments');
Route::get('/contact', 'contactController@index')->name('contact');
Route::post('/subscription', 'SubscribeController@store')->name('subscribe');
Route::get('/login', 'AuthController@loginForm')->name('login');
Route::post('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function(){
    Route::get('/', 'dashboardController@index');
    Route::resource('/services', 'ServicesController');
    Route::resource('/prices', 'PricesController');
    Route::resource('/reviews', 'ReviewsController');
    Route::resource('/users', 'UserController');
    Route::get('/reviews/toggle/{id}', 'ReviewsController@toggle');
    Route::get('/subscription', 'SubscribeController@index')->name('subscribe.show');
    Route::delete('/subscription/{id}/destroy', 'SubscribeController@destroy')->name('delete');
});