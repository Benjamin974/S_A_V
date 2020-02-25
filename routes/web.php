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

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientsController@index');
    Route::get('/{id}', 'ClientsController@moreInfo')->where('id', "[0-9]+");
});

Route::prefix('echanges')->group(function () {
    Route::get('/', 'ExchangesController@index');
    Route::post('/', 'ExchangesController@add');
});