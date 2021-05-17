<?php

use Illuminate\Support\Facades\Route;
use App\Http\heper;
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
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware'=>['localeSessionRedirect','localizationRedirect','localeViewPath']], function() {
#####====================Site Pages=======================#######
################################################################
    Route::get('/', 'Site\IndexController@getIndex')->name('index');
    Route::get('/ShowAuctions', 'Site\AuctionController@getAllAuctions')->name('auctions');
    Route::get('/AddAuction', 'Site\IndexController@getAuctionAdd')->middleware('auth')->name('auction.add');
    Route::get('AuctionDetails/{id}', 'Site\AuctionController@auctionDetails')->name('auction.details');
    Route::post('/search/', 'Site\AuctionController@search')->name('search');
    Route::get('/AboutUs', 'Site\IndexController@getAbout')->name('aboutus');
    Route::get('/ContactUs', 'Site\ContactController@getContact')->name('site.Contact');
    Route::post('/ContactUs', 'Site\ContactController@saveContact')->name('save.contact');
    Route::get('/Store', 'Site\IndexController@Store')->name('store');
    Route::get('mail', 'Site\MailController@send_Email');
    Route::get('test', 'Site\AuctionController@checkTimeAuction');
#######==================End Route Pages=====================########
//------------------------------------Is Readable For Notifications---------------------
    Route::get('/Read/{id}', 'Site\IndexController@is_readable')->name('readable');
#=====================================================================#
#=====================================================================#
//--------------------------------Linkes For Side Bar------------------
    Route::get('/bestAuctions', 'Site\AuctionController@bestAuctions')->name('bestAuctions');
    Route::get('/cat/{id}', 'Site\AuctionController@category')->name('category');
###======================User Profile Routes========================####
    Route::get('/profile/{id}', 'Site\IndexController@getProfile')->name('user.profile');
//------------------------------------------------------------------------------
//=================================Reset Password Routes========================
    Route::get('/Enter_Your_Email', 'Site\ResetPasswordController@enterYourEmail')->name('EmailForm');
    Route::get('/senCode', 'Site\ResetPasswordController@sendVerificationCode')->name('SendVerificationCode');
    Route::post('/verification/{id}', 'Site\ResetPasswordController@verificated')->name('Verification');
    Route::post('/reset_password/{id}', 'Site\ResetPasswordController@reset')->name('resetPassword');


#############################Bid Process#############################
#####################################################################
//===============================All News ======================
    Route::get('/all_news', 'Site\IndexController@news')->name('news');
    Route::get('/all_news/{id}', 'Site\IndexController@news_details')->name('news_details');
#####################################################################
    Route::post('AuctionProcess/{id}', 'Site\BidController@bidProcess')->middleware('auth')->name('AuctionProcess');


    Auth::routes();
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/AddAuction', 'Site\AuctionController@index');
        Route::post('/AddAuction', 'Site\AuctionController@create')->name('create.auction');
        Route::get('favorite-actione/{id}', 'Site\BidController@favoriteAuctions')->name('favorite-action');
        Route::Post('updateprofile/{id}', 'Site\ProfileController@update')->name('updateUserProfile');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/artisan/{order}', function ($order) {

        \Illuminate\Support\Facades\Artisan::call($order);
    });
});

