<?php

namespace Usman\Stripe;

use Illuminate\Support\ServiceProvider;

class StripeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');   
        $this->loadViewsFrom(__DIR__ . '/views','stripe');
    }
    public function register()
    {

    }
}