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


Route::get('/admin-login','Admin\Auth\AdminLoginController@loginForm');
Route::post('/admin-login','Admin\Auth\AdminLoginController@loginPost')->name('login.post');
Route::get('/admin-logout','Admin\Auth\AdminLoginController@adminLogout')->name('admin.logout');

Route::middleware(['auth:admin'])->group(function (){

    Route::get('/dashboard','Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('building', 'Admin\BuildingController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('facility', 'Admin\FacilityController');
    Route::resource('user', 'Admin\UserController');
    Route::resource('owner', 'Admin\OwnerController');
    Route::resource('office', 'Admin\OfficeController');
    Route::resource('image', 'Admin\ImageController');
    Route::resource('admin', 'Admin\AdminController');
    Route::post('office/{building_id}',['uses'=>'Admin\OfficeController@store' , 'as' => 'office.store']);
    Route::post('building/{building_id}/photos' , 'Admin\BuildingController@addPhoto');


    Route::resource('/roles','Admin\RoleController');
    Route::get('/permissions', 'Admin\PermissionController@index')->name('permission.index');
    Route::get('/permissions/{permission_id}', 'Admin\PermissionController@edit')->name('permission.edit');
    Route::post('/permissions/{permission_id}', 'Admin\PermissionController@update')->name('permission.update');

    Route::get('roles/{role_id}/addpermissions' , 'Admin\RoleController@displaypermission')->name('role.permission');
    Route::post('roles/{role_id}/permissions' , 'Admin\RoleController@addpermission')->name('role_permission.store');
    Route::get('roles/{role_id}/permissions' , 'Admin\RoleController@display_role_permission')->name('role.view.permission');
    Route::post('roles/{role_id}/permissions/{permission_id}','Admin\PermissionController@delete_relation')->name('permission.destroyRelation');

    Route::get('admins/{admin_id}/addroles' , 'Admin\AdminController@displayroles')->name('admin.role');
    Route::post('admins/{admin_id}/roles' , 'Admin\AdminController@addrole')->name('admin_role.store');
    Route::get('admins/{admin_id}/roles' , 'Admin\AdminController@display_admin_role')->name('admin.view.role');
    Route::post('admins/{admin_id}/roles/{role_id}','Admin\RoleController@delete_relation')->name('role.destroyRelation');


});




