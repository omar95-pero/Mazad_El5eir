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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
/*------------------| Auth Routes |-----------------------*/

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@doLogin');
Route::get('logout', 'Auth\LoginController@doLogout');
/*---------------------------------------------------------*/
/*------------------Update User Profil---------------------*/
Route::post('ProfileUpdate/{id}', 'Auth\UpdateProfileController@update');
/*---------------------------------------------------------*/
/*-------------------| Auctions Routs |----------------------*/
Route::get('allAuctions','Auctions\AuctionController@index');
Route::post('add_auction','Auctions\AuctionController@create');
Route::get('Auction/{id}', 'Auctions\AuctionController@show');
Route::get('bestAuction', 'Auctions\AuctionController@getBestAuction');

