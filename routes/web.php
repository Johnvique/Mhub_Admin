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

Route::group(['middleware' => ['auth']], function () {
Route::get('/Admin/index', 'AdminController@index');
Route::get('/Admin/Customer/customers', 'CustomersController@index');
Route::get('/Admin/Notification/notifications', 'NotificationsController@index');
Route::get('/Admin/Permission/permissions', 'PermissionsController@index');
Route::get('/Admin/Role/roles', 'RolesController@index');
Route::get('/Admin/Service/services', 'ServicesController@index');
Route::get('/Admin/Project/projects', 'ProjectsController@index');
Route::get('/Admin/Setting/settings', 'SettingsController@index');
Route::get('/Admin/Staff_Member/staff', 'StaffController@index');
Route::get('/Admin/User/system_users', 'SystemUsersController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Customer/customers', 'CustomersController');
Route::resource('Inquiry/inquiries', 'InquiriesController');
Route::resource('Permission/permissions', 'PermissionsController');
Route::resource('Role/roles', 'RolesController');
Route::resource('Service/services', 'ServicesController');
Route::resource('Project/projects', 'ProjectsController');
Route::resource('Setting/settings', 'SettingsController');
Route::resource('Staff_Member/staff', 'StaffController');
Route::resource('User/system_users', 'SystemUsersController');
Route::resource('Notification/notifications', 'NotificationsController');
