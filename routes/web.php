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
// Route::resource('details', 'DetailsController');
// Route::resource('roles', 'RolesController');
// Route::resource('properties', 'PropertiesController');
// Route::resource('reports', 'ReportsController');
Route::get('admin/add_admin', 'UsersController@index');
Route::get('admin/list_house', 'UsersController@list');
Route::get('admin/view_report', 'UsersController@report');
