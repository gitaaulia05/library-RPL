<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\BukuServices;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BukuServices::class, function($app){
            return new bukuServices();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
