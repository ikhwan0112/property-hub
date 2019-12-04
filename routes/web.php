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

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/singlehouse', 'PropertiesController@show');
Route::get('/listhouse', 'PropertiesController@index');
Route::get('/welcome', 'UsersController@is_admin');
<<<<<<< Updated upstream
// Route::resource('details', 'DetailsController');
// Route::resource('roles', 'RolesController');
 Route::resource('properties', 'PropertiesController');
// Route::resource('reports', 'ReportsController');
Route::get('admin/add_admin', 'UsersController@add');
Route::get('admin/list_house', 'UsersController@list');
Route::get('admin/view_report', 'UsersController@report');
=======

Route::get('admin/add_admin', 'UsersController@indexAdmin');
Route::get('admin/list_house', 'UsersController@list');
Route::get('admin/view_report', 'UsersController@report');

Route::get('user/index', 'PropertiesController@index');
Route::get('user/add_property', 'PropertiesController@show');
Route::get('user/user_report', 'PropertiesController@create');

Route::get('admin/list', 'UsersController@list');

Route::post('users/{users}', 'UsersController@update');
Route::post('properties/{id}', 'PropertiesController@update');
Route::resource('users', 'UsersController');

// Route::resource('roles', 'RolesController');

Route::resource('properties', 'PropertiesController');
<<<<<<< Updated upstream
// Route::resource('reports', 'ReportsController');
>>>>>>> Stashed changes
=======

Route::resource("details",'DetailsController');
// Route::get('details/{property_id?}', function({{$property->id}})
//  {return $property_id}
// );

// Route::resource('reports', 'ReportsController');
>>>>>>> Stashed changes
