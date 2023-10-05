<?php

namespace Zems\LrAdmin;

use Illuminate\Support\ServiceProvider;

class ZemsAdminProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->LoadViewsFrom(__DIR__.'/views', 'crudapi');
        $this->app->singleton(ZemsAdmin::class, function(){
            return new ZemsAdmin();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd("Hi from Zems Package");
    }
}
