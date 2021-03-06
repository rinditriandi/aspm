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

    Route::get('/register', function() {
        return view('register');
    });
    
    Route::get('/', 'LoginController@index');
    Route::get('/dashboard', 'DashboardController@index');

    Route::resource('ipm', 'Transaction\IPMController');
    Route::resource('apm', 'Transaction\APMController');

    Route::group(['prefix' => 'master'], function () 
    {
        Route::resource('kpi', 'Master\KPIController');
        Route::get('uom', 'Master\UoMController@index');
    });