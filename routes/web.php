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

Route::get('/','mainController@index');
Route::get('/about','mainController@about');
Route::get('/contact','mainController@contact');


Route::get('/services','servicesController@index');
Route::post('/services','servicesController@store');

Route::get('/customers','CustomerController@index')->name('customer.index');
Route::get('/customers/create','CustomerController@create')->name('customer.create');
Route::post('/customers','CustomerController@store');
Route::get('/customers/{customer}','CustomerController@show')->name('customer.show');
Route::get('/customers/{customer}/edit','CustomerController@edit')->name('customer.edit');
Route::PATCH('/customers/{customer}','CustomerController@update')->name('customer.update');
Route::DELETE('/customers/{customer}','CustomerController@destroy')->name('customer.delete');
