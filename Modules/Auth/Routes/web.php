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

// /auth/login
// /auth/logout

Route::prefix('auth')->group(function() {

    Route::get('/login', 'AuthController@login');
    Route::post('/login', 'AuthController@authenticate');
    Route::get('/logout', 'AuthController@logout');

    Route::get('/forgot-password', 'AuthController@forgotPassword');
    Route::post('/forgot-password', 'AuthController@postForgotPassword');
    Route::get('/reset/{email}/{code}', 'AuthController@reset');
    Route::post('/reset/{email}/{code}', 'AuthController@postResetPassword');

    Route::get('/register', 'RegisterController@register');
    Route::post('/register', 'RegisterController@postRegister');
    Route::get('/activate/{email}/{code}', 'RegisterController@activate');

});
