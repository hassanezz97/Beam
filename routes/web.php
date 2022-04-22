<?php

use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        //////////////////////////// Home pages ///////////////////////////
            Route::get('/', 'HomeController@index')->name('influencer');
            Route::get('/businesses', 'HomeController@visitBusiness')->name('businesses');

        //////////////////// Influencers ////////////////////////////////////
            Route::get('/influencer/home', 'HomeController@visitInfluencersHome')->name('home');
            Route::get('/influencer/profile', 'HomeController@setupProfile')->name('profile');

        //////////////////// Business /////////////////////////////////////////
            Route::get('/business/home', 'HomeController@visitBusinessHome')->name('home-bus');
            Route::get('/business/profile', 'HomeController@setupBusinessProfile')->name('profile-bus');

        //////////////////////// Search //////////////////////////////////
            Route::get('/influencer/advanced-search', 'HomeController@advancedSearch')->name('advSearch');
            Route::get('/influencer/search-influencer', 'HomeController@searchInfluencer')->name('searchInfluencer');
            Route::get('/influencer/search-business', 'HomeController@searchBusiness')->name('searchBusiness');
            Route::get('/influencer/search-username', 'HomeController@searchUsername')->name('searchUsername');


});


Route::get('/influencer/email-verification', 'HomeController@verification')->name('verification');
