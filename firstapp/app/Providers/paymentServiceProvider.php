<?php

namespace App\Providers;
namespace App\PaymentGateWay;
use Illuminate\Support\ServiceProvider;

class paymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->App->bind('payment',function(){
            return new payment();
        });
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
