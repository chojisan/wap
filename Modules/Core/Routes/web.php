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

Route::get('backend', function () {
	return 'backend';
})->name('backend');

Route::prefix('core')->group(function() {
    Route::get('/', 'CoreController@index');
});