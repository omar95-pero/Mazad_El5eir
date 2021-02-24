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
########################Site Pages##############################
################################################################
Route::get('/', 'Site\IndexController@getIndex')->name('index');
Route::get('/ShowAuctions', 'Site\AuctionController@getAllAuctions')->name('auctions.detailes');
Route::get('/AddAuction', 'Site\IndexController@getAuctionAdd')->name('auction.add');
Route::get('AuctionDetails/{id}', 'Site\AuctionController@auctionDetails')->name('auction.details');
Route::get('/AboutUs', 'Site\IndexController@getAbout')->name('aboutus');
Route::get('/ContactUs', 'Site\ContactController@getContact')->name('site.Contact');
Route::post('/ContactUs', 'Site\ContactController@saveContact')->name('save.contact');
##########################End Route Pages############################
#####################################################################

#############################Bid Process#############################
#####################################################################
Route::post('/AuctionProcess', 'Site\BidController@Bid')->name('bid');







Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/AddAuction', 'Site\AuctionController@index');
    Route::post('/AddAuction', 'Site\AuctionController@create')->name('create.auction');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
