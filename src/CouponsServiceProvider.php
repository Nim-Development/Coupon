<?php

namespace NimDevelopment\Coupons;

use Illuminate\Support\ServiceProvider;
use NimDevelopment\Coupons\Classes\Coupon;

class CouponsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('coupon', function(){
            return new Coupon();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');
    }
}