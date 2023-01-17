<?php

namespace Usman\Stripe;

use Illuminate\Support\ServiceProvider;

class StripeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');   
        $this->loadViewsFrom(__DIR__ . '/views','stripe');
        $this->mergeConfigFrom(__DIR__ . '/config/stripe.php','stripe');
        $this->publishes([__DIR__ . '/config/stripe.php' => config_path('stripe.php'),]);

    }
    public function register()
    {

    }
}