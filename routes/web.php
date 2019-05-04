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

Route::get('/', 'FrontendController@index');

Auth::routes();

Route::group(['middleware' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'bantul'], function () {
        Route::post('/', 'DestinationController@store');
        Route::get('/', 'DestinationController@index_bantul');
        Route::get('/create', 'DestinationController@create');
        Route::get('/{id}', 'DestinationController@show');
        Route::put('/{id}', 'DestinationController@update');
        Route::delete('/{id}', 'DestinationController@destroy');
        Route::get('/{id}/edit', 'DestinationController@edit');
    });

    Route::group(['prefix' => 'sleman'], function () {
        Route::post('/', 'DestinationController@store');
        Route::get('/', 'DestinationController@index_sleman');
        Route::get('/create', 'DestinationController@create');
        Route::get('/{id}', 'DestinationController@show');
        Route::put('/{id}', 'DestinationController@update');
        Route::delete('/{id}', 'DestinationController@destroy');
        Route::get('/{id}/edit', 'DestinationController@edit');
    });

    Route::group(['prefix' => 'gunungkidul'], function () {
        Route::post('/', 'DestinationController@store');
        Route::get('/', 'DestinationController@index_gunungkidul');
        Route::get('/create', 'DestinationController@create');
        Route::get('/{id}', 'DestinationController@show');
        Route::put('/{id}', 'DestinationController@update');
        Route::delete('/{id}', 'DestinationController@destroy');
        Route::get('/{id}/edit', 'DestinationController@edit');
    });

    Route::group(['prefix' => 'kulonprogo'], function () {
        Route::post('/', 'DestinationController@store');
        Route::get('/', 'DestinationController@index_kulonprogo');
        Route::get('/create', 'DestinationController@create');
        Route::get('/{id}', 'DestinationController@show');
        Route::put('/{id}', 'DestinationController@update');
        Route::delete('/{id}', 'DestinationController@destroy');
        Route::get('/{id}/edit', 'DestinationController@edit');
    });

    Route::group(['prefix' => 'yogyakarta'], function () {
        Route::post('/', 'DestinationController@store');
        Route::get('/', 'DestinationController@index_yogyakarta');
        Route::get('/create', 'DestinationController@create');
        Route::get('/{id}', 'DestinationController@show');
        Route::put('/{id}', 'DestinationController@update');
        Route::delete('/{id}', 'DestinationController@destroy');
        Route::get('/{id}/edit', 'DestinationController@edit');
    });

    

});