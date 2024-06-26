<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use ZaimeaLabs\Charts\Charts;
use ZaimeaLabs\Charts\Console\InstallCommand;
use ZaimeaLabs\Charts\Console\MakeChartCommand;

class ChartsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('charts', function(){
            return new Charts;
        });

        $this->mergeConfigFrom($this->packageBasePath('config/charts.php'), 'charts');

        $this->commands([
            MakeChartCommand::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom($this->packageBasePath('resources/views'), 'charts');

        $this->publishes([
            $this->packageBasePath('resources/js/charts') => public_path('vendor/charts')
        ], 'charts-apexcharts-script');

        $this->publishes([
            $this->packageBasePath('stubs/resources/views') => resource_path('views/vendor/charts')
        ], 'charts-views');

        $this->publishes([
            $this->packageBasePath('config/charts.php') => base_path('config/charts.php')
        ], 'charts-config');

        $this->publishes([
            $this->packageBasePath('stubs/stubs') => base_path('stubs')
        ], 'charts-stubs');

        Livewire::component('charts-area-chart', \ZaimeaLabs\Charts\Livewire\LivewireAreaChart::class);
        Livewire::component('charts-bar-chart', \ZaimeaLabs\Charts\Livewire\LivewireBarChart::class);
        Livewire::component('charts-donut-chart', \ZaimeaLabs\Charts\Livewire\LivewireDonutChart::class);
        Livewire::component('charts-heatmap-chart', \ZaimeaLabs\Charts\Livewire\LivewireHeatMapChart::class);
        Livewire::component('charts-horizontal-bar', \ZaimeaLabs\Charts\Livewire\LivewireHorizontalBar::class);
        Livewire::component('charts-line-chart', \ZaimeaLabs\Charts\Livewire\LivewireLineChart::class);
        Livewire::component('charts-pie-chart', \ZaimeaLabs\Charts\Livewire\LivewirePieChart::class);
        Livewire::component('charts-polar-chart', \ZaimeaLabs\Charts\Livewire\LivewirePolarAreaChart::class);
        Livewire::component('charts-radar-chart', \ZaimeaLabs\Charts\Livewire\LivewireRadarChart::class);
        Livewire::component('charts-radial-chart', \ZaimeaLabs\Charts\Livewire\LivewireRadialChart::class);

        Blade::directive('chartsScripts', function () {
            $scriptsUrl = asset('/vendor/charts/charts.js');
            return <<<EOF
<script src="$scriptsUrl"></script>
EOF;
        });
    }

    public function packageBasePath(string $path = ''): string
    {
        return __DIR__ . '/../' . $path;
    }
}
