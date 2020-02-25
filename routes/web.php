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
ROute::get('/', function() {
    return view('clients.accueil');
});

Route::prefix('clients')->group(function () {
    Route::get('/', 'ClientsController@index');
    Route::get('/{id}', 'ClientsController@moreInfo')->where('id', "[0-9]+");
});

Route::prefix('echange')->group(function () {
    Route::get('/', 'ExchangeController@index');
    Route::post('/', 'ExchangeController@add');
});

Route::prefix('echanges')->group(function () {
    Route::get('/', 'ExchangesController@index');
});