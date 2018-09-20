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


Route::get('/', "VehicleController@index")->name('vehicules.index');

Route::get('/vehicles', "VehicleController@index")->name('vehicules.index');
Route::get('/vehicles/create', "VehicleController@create")->name('vehicules.create');
Route::post('/vehicles/store', "VehicleController@store")->name('vehicules.store');
Route::get('/vehicles/{vehicle}/edit', 'VehicleController@edit')->name('vehicules.edit');
Route::put('/vehicles/update/{vehicle}', 'VehicleController@update')->name('vehicules.update');
Route::get('/vehicles/{vehicle}/remove','VehicleController@remove')->name('vehicules.remove');

