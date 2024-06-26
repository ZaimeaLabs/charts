<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Tests;

use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use ZaimeaLabs\Charts\ChartsServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver'    => 'sqlite',
            'database'  => ':memory:'
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
            'Charts' => \ZaimeaLabs\Charts\Facades\Charts::class
        ];
    }

}
