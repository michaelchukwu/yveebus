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

Route::get('/', 'HomeController@index');

Auth::routes();

//start here


// Route::auth();
Route::get('/activate', 'ActivationController@index')->name('activate');
Route::post('/activate', 'ActivationController@activate');
Route::post('/available', 'BusController@searchBus')->name('available');
Route::post('/sublocation', 'LocationController@sublocation')->name('sublocation');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/destination', 'HomeController@get_destination')->name('destination');
    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
    Route::post('trip', 'BusController@showBus')->name('trip');
    Route::post('trip/book', 'BusController@bookBus')->name('book');

    Route::get('wallet', 'WalletController@index')->name('wallet');
    Route::get('wallet/create', 'WalletController@create')->name('create.wallet');
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::post('profile', 'ProfileController@update')->name('profile.update');
    Route::get('history', 'ProfileController@history')->name('history');

    // routes that only admin or owner can access
    Route::group(['middleware' => ['role:admin|owner']], function() {
        //start here
        Route::get('/janitor', 'AdminController@index');
        Route::resource('users','UserController');
        Route::resource('routes', 'RouteController');
        Route::resource('promos', 'PromoController');
        Route::get('routes/{id}/activate', 'RouteController@activate')->name('route.activate');
        Route::get('routes/{id}/deactivate', 'RouteController@deactivate')->name('route.deactivate');

        Route::resource('locations', 'LocationController');

        Route::resource('roles','RoleController');
        Route::get('/bus', 'BusController@index')->name('bus');
        Route::get('/bus/create', 'BusController@create')->name('buses.create');
        Route::post('/bus/create', 'BusController@store')->name('buses.store');
        Route::get('/bus/edit/{id}', 'BusController@edit')->name('buses.edit');
        Route::delete('/bus/{id}', 'BusController@destroy')->name('buses.destroy');
        Route::patch('/bus/{id}', 'BusController@update')->name('buses.update');
    });

});
