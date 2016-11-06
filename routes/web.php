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

Route::get('/home', 'HomeController@index');



//These are the rooutes realated to RolesController 
Route::get('/roles/index', 'RolesController@index');
Route::get('/roles/list', 'RolesController@list');
Route::get('/roles/add', 'RolesController@add');
Route::post('/roles/store/', 'RolesController@store')->name('roles_store');
Route::get('/roles/show/{id?}', 'RolesController@show')->name('role_show');
Route::get('/roles/show/edit/{id?}', 'RolesController@edit')->name('role_edit');
Route::patch('/roles/show/edit/{id?}', 'RolesController@update')->name('role_update');


//These are the routes related to the admin panel :: eg assign roles to a user...
Route::get('/adminpanel/index', 'AdminPanelController@index');
Route::get('/adminpanel/assign/{id?}', 'AdminPanelController@getroles')->name('user_show');;
Route::get('/adminpanel/assigned/', 'AdminPanelController@roleassign')->name('role_assign');;










