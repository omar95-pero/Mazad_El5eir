<?php

namespace App\Providers;

use App\Models\Notification;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use App\Validators\ReCaptcha;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        config([
            'laravellocalization.supportedLocales' => [
                'ar'  => array( 'name' => 'Arabic', 'script' => 'Arab', 'native' => 'العربية' ),
                'en'  => array( 'name' => 'English', 'script' => 'Latn', 'native' => 'English' ),
            ],

            'laravellocalization.useAcceptLanguageHeader' => true,

            'laravellocalization.hideDefaultLocaleInURL' => true
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {

        Validator::extend('recaptcha', 'App\Validators\ReCaptcha@validate');
        Paginator::useBootstrap();

    }
}
