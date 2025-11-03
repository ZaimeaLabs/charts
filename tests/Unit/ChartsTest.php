<?php

declare(strict_types=1);

namespace Zaimea\Charts\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Zaimea\Charts\Facades\Charts;
use Zaimea\Charts\Tests\TestCase;

class ChartsTest extends TestCase
{
    public function test_it_tests_charts_install_add_chart_stubs(): void
    {
        $chartTypes = collect([
            'PieChart',
            'DonutChart',
            'RadialBarChart',
            'PolarAreaChart',
            'LineChart',
            'AreaChart',
            'BarChart',
            'HorizontalBarChart',
            'HeatMapChart',
            'RadarChart',
        ]);

        $chartTypes->each(function ($chart) {
            $this->assertFileExists(
                __DIR__ . "/../../src/stubs/charts/Livewire/{$chart}.stub"
            );
        });
    }

    public function test_it_tests_charts_can_load_script_correctly(): void
    {
        $chart = Charts::pieChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setLabels([__('Published'), __('No Published')])
            ->setTitle('Posts');

        $this->assertEquals($chart->dataset(), "[150,120]");
    }

    public function test_it_tests_charts_can_change_default_config_colors(): void
    {
        $chart = Charts::pieChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setTitle('Posts');

        $oldColors = $chart->colors();
        $chart->setColors(['#fe9700', '#607c8a']);
        $this->assertNotEquals($oldColors, $chart->colors());
    }
}
