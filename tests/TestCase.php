<?php

namespace Magros\BlogPackage\Tests;

use Magros\BlogPackage\BlogPackageServiceProvider;
use Orchestra\Testbench\BrowserKit\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__ . '/../src/migrations');
        $this->withFactories(__DIR__ . '/factories');
    }

    /**
     * Load the package service provider.
     *
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [BlogPackageServiceProvider::class];
    }

}