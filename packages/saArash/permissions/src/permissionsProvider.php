<?php

namespace saArash\permissions;

use Illuminate\Support\ServiceProvider;

class permissionsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {


    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->loadViewsFrom(__DIR__ . '/views', 'permissions');

        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/permissions'),
        ],'permissions');
        $this->publishes([
            __DIR__ . '/configs/permissions.php' => config_path('permissions.php')
        ], 'permissions');

        $this->publishes([
            __DIR__ . '/migrations/' => database_path('migrations')
        ], 'permissions');
    }
}
