<?php

namespace Kaiwh\Currency\Providers;

class CurrencyServiceProvider extends \Illuminate\Support\ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('kai_currency', function () {
            return new \Kaiwh\Currency\CurrencyManager();
        });
    }
}
