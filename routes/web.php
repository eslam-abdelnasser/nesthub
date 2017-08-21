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

Route::get('/test','Admin\DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test','Admin\DashboardController@index');

Route::resource('building', 'BuildingController');
Route::resource('category', 'CategoryController');
Route::resource('facility', 'FacilityController');
Route::resource('office ', 'OfficeController');
Route::post('office/{building_id}',['uses'=>'OfficeController@store' , 'as' => 'office.store']);



