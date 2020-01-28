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
    Route::get('/admin/index', function () {
        return view('admin/index');
    });
    Route::get('/admin/customers', function () {
        return view('admin/customers');
    });
    Route::get('/admin/staff', function () {
        return view('admin/staff');
    });
    Route::get('/admin/services', function () {
        return view('admin/services');
    });
    Route::get('/admin/roles', function () {
        return view('admin/roles');
    });
    Route::get('/admin/permissions', function () {
        return view('admin/permissions');
    });
    Route::get('/admin/system_users', function () {
        return view('admin/system_users');
    });
    Route::get('/admin/settings', function () {
        return view('admin/settings');
    });
    Route::get('/admin/inquiries', function () {
        return view('admin/inquiries');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
