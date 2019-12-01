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
// Route::resource('users', 'UsersController');
Route::get('user/user-index', 'UsersController@index');
Route::get('user/add-property', 'UsersController@add');
Route::get('user/user-report', 'UsersController@report');
Route::post('insert','UsersController@store');
Route::post('user/user-report','UsersController@insertreport');
