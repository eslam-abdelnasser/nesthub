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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/test','Admin\DashboardController@index');

Route::get('/test','Admin\DashboardController@index')->name('admin.dashboard');

Route::get('/admin-login','Admin\Auth\AdminLoginController@loginForm');
Route::post('/admin-login','Admin\Auth\AdminLoginController@loginPost')->name('login.post');
Route::resource('building', 'Admin\BuildingController');
Route::resource('category', 'Admin\CategoryController');
Route::resource('facility', 'Admin\FacilityController');
Route::resource('user', 'Admin\UserController');
Route::resource('owner', 'Admin\OwnerController');
Route::resource('office', 'Admin\OfficeController');
Route::post('office/{building_id}',['uses'=>'Admin\OfficeController@store' , 'as' => 'office.store']);



