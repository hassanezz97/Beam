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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:influencer']
    ], function () {

    //==============================dashboard============================
    Route::get('/influencer/home', function () {
        return view('influencers.home-influencers');
    });
    Route::get('/influencer/edit-profile', 'HomeController@setupProfile')->name('edit-profile-influencer');
    Route::get('/influencer/profile', 'HomeController@viewProfile')->name('view-profile-influencer');

});
Route::get('/', 'HomeController@home')->middleware('guest')->name('influencer');
Route::get('/influencer/register', 'HomeController@registerInfluencer')->name('register-inf');
//Route::get('/', 'HomeController@visitInfluencer')->middleware('guest')->name('businesses');

