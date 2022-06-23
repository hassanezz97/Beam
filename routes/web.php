<?php

use Illuminate\Support\Facades\Auth;
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
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth' ]
    ], function(){

        //////////////////////////// Registration ///////////////////////////
//        Route::get('/registration-inf', 'HomeController@registerInfluencer')->name('reg-influencer');


        //////////////////// Influencers ////////////////////////////////////
//            Route::get('/influencer/home', 'HomeController@visitInfluencersHome')->name('home');
//            Route::get('/influencer/profile', 'HomeController@setupProfile')->name('profile');

//        //////////////////// Business /////////////////////////////////////////
//            Route::get('/business/home', 'HomeController@visitBusinessHome')->name('home-bus');
//            Route::get('/business/profile', 'HomeController@setupBusinessProfile')->name('profile-bus');

//        //////////////////////// Search //////////////////////////////////
//            Route::get('/influencer/advanced-search', 'HomeController@advancedSearch')->name('advSearch');
//            Route::get('/influencer/search-influencer', 'HomeController@searchInfluencer')->name('searchInfluencer');
//            Route::get('/influencer/search-business', 'HomeController@searchBusiness')->name('searchBusiness');
//            Route::get('/influencer/search-username', 'HomeController@searchUsername')->name('searchUsername');




//    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

});
//Auth::routes();
//////////////////////////// Home pages ///////////////////////////
Route::get('/', 'HomeController@home')->middleware('guest')->name('influencer');



Route::get('/influencer/register', 'HomeController@registerInfluencer')->middleware('guest')->name('register-inf');
// authentication

Route::group(['namespace' => 'Auth'], function () {
//    Route::get('/influencer/register2', 'InfluencerRegistration@index')->name('register-inf');
    Route::get('/influencer/confirmRegistration', 'InfluencerRegistration@register')->name('confirm-register-inf');
    Route::post('/','LoginController@login')->name('login');
    Route::get('/logout/{type}', 'LoginController@logout')->name('logout');
});

//Route::get('/influencer/email-verification', 'HomeController@verification')->name('verification');
//['verify'=>true]





//Route::group(['middleware'=>['guest']], function (){
//    Route::get('/', function()
//    {
//        return view('home_page.influencer');
////        return view('auth.login');
//    });
//});


//------------------------------Registration------------------------- //
//Route::get('/register', 'HomeController@registerInfluencer')->name('register');

//Route::get('/register/secondStep', 'RegisterController@firstStepSubmit')->name('firstStepSubmit');

//Route::get('/register', function () {
//    return view('auth.register');
//})->name('register');

//Route::group(['namespace'=>'Auth'],function (){
//    Route::get('/personalinfo', 'RegisterController@accountValidator')->name('personalinfo');
//});
//Route::get('wizard', function () {
//    return view('default');
//});
//Route::get('wizard2', function () {
//    return view('default2');
//});
