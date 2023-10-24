<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MyService::class, function ($app) {
            return new MyService();
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
