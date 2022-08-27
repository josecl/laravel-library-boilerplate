<?php

declare(strict_types=1);

namespace Josecl\LaravelLibraryBoilerplate;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelLibraryBoilerplateServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-library-boilerplate.php', 'laravel-library-boilerplate');
//        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-library-boilerplate');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__ . '/../config/laravel-library-boilerplate.php' => config_path('laravel-library-boilerplate.php')], 'laravel-library-boilerplate');
        }

        $this->registerRoutes();
    }

    protected function registerRoutes(): void
    {
        $routeConfiguration = [
            'prefix' => config('laravel-library-boilerplate.prefix'),
            'middleware' => config('laravel-library-boilerplate.middleware'),
        ];

        Route::group($routeConfiguration, function () {
            $this->loadRoutesFrom(__DIR__ . '/routes.php');
        });
    }
}
