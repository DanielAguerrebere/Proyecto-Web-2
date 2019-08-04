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

Route::get('/',['uses'=>'AdminController@index','as'=>'admin.index']);
Route::post('/reservations',['uses'=>'AdminController@getReservations','as'=>'admin.reservations']);

Route::post('/index',['uses'=>'ReservationsController@client','as'=>'reservations.client']);
Route::post('/categories',['uses'=>'ReservationsController@categories','as'=>'reservations.categories']);
Route::post('/check',['uses'=>'ReservationsController@check','as'=>'reservations.check']);
Route::post('/makeReservation',['uses'=>'ReservationsController@makeReservation','as'=>'reservations.makeReservation']);
Route::post('/makeReservationPayed',['uses'=>'ReservationsController@makeReservationPayed','as'=>'reservations.makeReservationPayed']);
Route::post('/extras',['uses'=>'ReservationsController@extras','as'=>'reservations.extras']);
Route::post('/checkReservation',['uses'=>'ReservationsController@checkReservation','as'=>'reservations.checkReservation']);
Route::get('/delete/{id}','ReservationsController@delete');



Route::post('/admin',['uses'=>'AdminController@menu','as'=>'admin.menu']);


 //
 Route::get('/categories',['uses'=>'CategoriesController@index','as'=>'categories.index']);
 Route::get('/categories/create','CategoriesController@create');
 Route::post('/categories/insert','CategoriesController@insert');
 Route::get('/categories/detail/{id}','CategoriesController@detail');
 Route::get('/categories/modify/{id}','CategoriesController@modify');
 Route::get('/categories/delete/{id}','CategoriesController@delete');
 Route::post('/categories/update/{id}','CategoriesController@update');
 Route::get('/cars',['uses'=>'CarsController@index','as'=>'cars.index']);
 Route::get('/cars/create',['uses'=>'CarsController@create','as'=>'cars.create']);
 Route::post('/cars',['uses'=>'CarsController@store','as'=>'cars.store']);

