<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider within a group which
| Here is where you can register API routes for your application. These
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::prefix('patterns')
    ->group(function () {
        Route::get('/factory', 'FactoryController@index');
    });
