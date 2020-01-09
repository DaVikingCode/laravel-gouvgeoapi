<?php

namespace DaVikingCode\LaravelGouvGeoApi;

use DaVikingCode\LaravelGouvGeoApi\Controllers\LaravelGouvGeoApiController;
use DaVikingCode\LaravelGouvGeoApi\Models\Departement;
use Illuminate\Support\ServiceProvider;

class LaravelGouvGeoApiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'davikingcode');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'davikingcode');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravelgouvgeoapi.php', 'laravelgouvgeoapi');

        // Register the service the package provides.
        $this->app->singleton('gouvgeoapi', function ($app) {
            return new LaravelGouvGeoApiController;
        });

        $this->app->singleton('departement', function ($app) {
            return new Departement;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelgouvgeoapi'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravelgouvgeoapi.php' => config_path('laravelgouvgeoapi.php'),
        ], 'laravelgouvgeoapi.config');

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ], 'migrations');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/davikingcode'),
        ], 'gouvgeoapi.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/davikingcode'),
        ], 'gouvgeoapi.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/davikingcode'),
        ], 'gouvgeoapi.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
