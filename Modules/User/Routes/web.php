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

Route::prefix('backend/user')->group(function() {
    Route::get('/', 'UserController@index');
    Route::get('/create', 'UserController@create');
    Route::post('/', 'UserController@store');
    Route::get('/{user}/edit', 'UserController@edit');
    Route::put('/{user}', 'UserController@update');
    Route::delete('/{user}', 'UserController@delete');
});
