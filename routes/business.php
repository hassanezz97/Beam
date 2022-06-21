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

    Route::get('/business/register', 'HomeController@registerBusiness')->name('register-bus');
    Route::get('/businesses', 'HomeController@visitBusiness')->middleware('guest')->name('businesses');


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:business']
    ], function () {

    //==============================dashboard============================
//    Route::get('/business/home', function () {
//        return view('businesses.home-business');
//    });
    Route::group(['namespace' => 'AdvancedSearch'], function () {
        Route::resource('advanced-search', 'AdvancedSearchController');
    });
    Route::group(['namespace' => 'Business'], function () {
        Route::get('/business/home', 'BusinessHomePageController@index')->name('business_home');
        Route::get('/business/collaborations', 'CollaborationBusinessController@index')->name('index-collaboration');
        Route::get('/business/acceptCollaboration', 'CollaborationBusinessController@acceptCollaboration')->name('accept-collaboration');
        Route::get('/business/profile', 'BusinessHomePageController@viewProfileBusiness')->name('view-business-profile');
    });
    Route::group(['namespace' => 'SingleInfluencer'], function () {
        Route::get('/sendrequest', 'SingleInfluencerInBusinessController@sendRequest')->name('sendRequest');
        Route::get('/user/{name}', 'SingleInfluencerInBusinessController@index')->name('singleInfluencerInBusiness');

    });

//    Route::get('/SingleInfluencerBusiness', 'HomeController@SingleInfluencerInBusiness')->name('single-bus-inf');

});
