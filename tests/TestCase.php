<?php

declare(strict_types=1);

namespace Zaimea\Charts\Tests;

use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Zaimea\Charts\ChartsServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            ChartsServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app): array
    {
        return [
            'Charts' => \Zaimea\Charts\Facades\Charts::class
        ];
    }
}
