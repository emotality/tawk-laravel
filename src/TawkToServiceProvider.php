<?php

namespace Emotality\TawkTo;

use Illuminate\Support\ServiceProvider;

class TawkToServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/tawkto.php' => config_path('tawkto.php')
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TawkTo::class, function ($app) {
            return new TawkTo();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [TawkTo::class];
    }
}
