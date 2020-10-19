<?php

namespace Emotality\TawkTo;

use Illuminate\Support\ServiceProvider;

class TawkToServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/tawkto.php' => config_path('tawkto.php')
        ], 'config');
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        //
    }
}
