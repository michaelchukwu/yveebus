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
//start ere


// Route::auth();

Route::post('/available', 'BusController@searchBus');
Route::group(['middleware' => ['auth']], function() {


// Route::get('/home', 'HomeController@index');


Route::resource('users','UserController', ['middleware' => ['permission:users']]);
Route::resource('routes', 'RouteController', ['middleware' => ['permission:routes']]);

Route::get('routes/{id}/activate',['as'=>'route.activate','uses'=>'RouteController@activate','middleware' => ['permission:route-activate']]);
Route::get('routes/{id}/deactivate',['as'=>'route.deactivate','uses'=>'RouteController@deactivate','middleware' => ['permission:route-deactivate']]);
Route::get('wallet',['as'=>'wallet.index','uses'=>'WalletController@index']);
Route::resource('locations', 'LocationController', ['middleware' => ['permission:location']]);

Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
});