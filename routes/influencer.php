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

    Route::group(['namespace' => 'Influencers'], function () {
        Route::get('/influencer/home', 'InfluencerHomePageController@index')->name('Influencer-home');
        Route::get('/influencer/profile', 'InfluencerHomePageController@viewProfileInfluencer')->name('view-profile-influencer');
        Route::get('/influencer/sendInformation', 'InfluencerHomePageController@sendInformation')->name('Send-Information');
        Route::resource('/influencer/edit-profile', 'InfluencerProfileController');
        Route::get('/influencer/collaborations', 'CollaborationsController@index')->name('Influencer-collaborations');
        Route::get('/influencer/collaborationsent', 'CollaborationsController@collaborateWithBusiness')->name('Influencer-send-collaborations');
    });
//    Route::get('/influencer/edit-profile', 'HomeController@setupProfile')->name('edit-profile-influencer');
    //////////////////////// Search //////////////////////////////////
//    Route::get('/influencer/advanced-search', 'HomeController@advancedSearch')->name('advSearch');
//    Route::group(['namespace' => 'AdvancedSearch'], function () {
//        Route::resource('advanced-search', 'AdvancedSearchController');
//    });

//    Route::get('/influencer/search-influencer', 'HomeController@searchInfluencer')->name('searchInfluencer');
//    Route::get('/influencer/search-business', 'HomeController@searchBusiness')->name('searchBusiness');
//    Route::get('/influencer/search-username', 'HomeController@searchUsername')->name('searchUsername');




    Route::get('/influencer/{name}', 'HomeController@viewSingleInfluencer')->name('singleInfluencer');

    Route::group(['namespace' => 'SingleBusiness'], function () {
        Route::get('/{name}', 'SingleBusinessInInfluencerController@index')->name('singleBusinessInInfluencer');
    });




});
Route::get('/', 'HomeController@home')->middleware('guest')->name('influencer');
//Route::get('/influencer/register', 'HomeController@registerInfluencer')->name('register-inf');
//Route::get('/', 'HomeController@visitInfluencer')->middleware('guest')->name('businesses');

