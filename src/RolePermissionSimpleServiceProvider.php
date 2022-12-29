<?php

namespace Pairac\Rolepermissionsimple;

use Illuminate\Support\ServiceProvider;

class RolePermissionSimpleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishFiles();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Publish file for package
     * 
     * @return void
     */
    private function publishFiles()
    {
        $mainTag = 'rolepermissionsimple';

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations')
        ], $mainTag.'-migrations');
    }
}
