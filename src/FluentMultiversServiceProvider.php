<?php

namespace Vormkracht10\FluentMultivers;

use Illuminate\Support\ServiceProvider;
use Vormkracht10\FluentMultivers\Services\FluentMultivers;

class FluentMultiversServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
    }

    /**
     * Register any package services.
     */
    public function register()
    {
        $this->app->singleton('fluent-multivers', function ($app) {
            return new FluentMultivers();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['fluent-multivers'];
    }
}
