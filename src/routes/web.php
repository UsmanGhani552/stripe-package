<?php

use Usman\Stripe\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Usman\Stripe\Http\Controllers'],function(){
    Route::get('index', [StripeController::class,'index'])->name('stripe.index')->middleware('web');
    Route::get('stripe', [StripeController::class,'stripe'])->middleware('web');
    Route::post('stripe', [StripeController::class,'stripePost'])->name('stripe.post')->middleware('web');
});