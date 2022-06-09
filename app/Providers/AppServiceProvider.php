<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('first_service_helper',function($app){
            dd("This is my first service container");
        });
        App::getFacadeApplication()->bind('second_service_helper',function($app){
            dd("This is my second service container");

        });
        app()->bind('third_service_provider',function($app){
            dd("This is my third service container");
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
