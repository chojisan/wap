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

Route::prefix('auth')->group(function() {

    Route::get('/login', 'AuthController@login');
    Route::post('/login', 'AuthController@authenticate');
    Route::get('/logout', 'AuthController@logout');
    //Route::get('/login', 'LoginController@login');
    //Route::post('/login', 'LoginController@authenticate');
    //Route::get('/logout', 'LoginController@logout');

    Route::get('/forgot-password', 'AuthController@forgotPassword');
    Route::post('/forgot-password', 'AuthController@postForgotPassword');
    //Route::get('/forgot-password', 'ForgotPasswordController@forgotPassword');
    //Route::post('/forgot-password', 'ForgotPasswordController@postForgotPassword');


    Route::get('/reset/{email}/{code}', 'AuthController@reset');
    Route::post('/reset/{email}/{code}', 'AuthController@postResetPassword');
    //Route::get('/reset/{email}/{code}', 'ResetPasswordController@reset');
    //Route::post('/reset/{email}/{code}', 'ResetPasswordController@postResetPassword');

    Route::get('/register', 'RegisterController@register');
    Route::post('/register', 'RegisterController@postRegister');
    Route::get('/activate/{email}/{code}', 'RegisterController@activate');

});
