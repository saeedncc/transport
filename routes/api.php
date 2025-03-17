<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::name('api.')->namespace('App\Http\Controllers')->group(function () {

	Route::group(['prefix' => 'vehicles','controller'=>'VehicleController'], function () {
		Route::name('vehicles.')->group(function () {
			Route::get('/','index')->name('index');
			Route::post('/','store')->name('store');
			Route::get('/withDriver','withDriver')->name('withDriver');
			Route::post('/{vehicle}','assignDriver')->name('assignDriver');
		});
	});

    Route::group(['prefix' => 'drivers','controller'=>'DriverController'], function () {
        Route::name('drivers.')->group(function () {
            Route::get('/','index')->name('index');
            Route::post('/','store')->name('store');
        });
    });

});


