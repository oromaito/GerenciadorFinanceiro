<?php

namespace App\Providers;

use App\Finança;
use App\Observers\FinançaObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Finança::observe(FinançaObserver::class);
    }
}
