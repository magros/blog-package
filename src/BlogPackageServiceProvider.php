<?php

namespace Magros\BlogPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BlogPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes()
            ->registerResources();

        $this->publishes([
            __DIR__ . '/migrations/' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/config.php' => config_path('blog_package.php'),
        ]);
    }

    public function registerRoutes()
    {
        Route::group([
            'prefix' => 'blog-package',
            'namespace' => 'Magros\BlogPackage\Controllers',
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/routes.php');
        });

        return $this;
    }

    public function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'BlogPackage');

        return $this;
    }

}