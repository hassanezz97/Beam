<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:business']
    ], function () {

    //==============================dashboard============================
    Route::get('/business/home', function () {
        return view('businesses.home-business');
    });

});
Route::get('/business/register', 'HomeController@registerBusiness')->name('register-bus');
Route::get('/businesses', 'HomeController@visitBusiness')->middleware('guest')->name('businesses');
