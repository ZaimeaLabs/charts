<?php

declare(strict_types=1);

namespace Zaimea\Charts\Tests\Feature;

use Livewire\Livewire;
use Zaimea\Charts\Facades\Charts;
use Zaimea\Charts\Livewire\LivewireAreaChart;
use Zaimea\Charts\Livewire\LivewireBarChart;
use Zaimea\Charts\Livewire\LivewireDonutChart;
use Zaimea\Charts\Livewire\LivewireHeatMapChart;
use Zaimea\Charts\Livewire\LivewireHorizontalBar;
use Zaimea\Charts\Livewire\LivewireLineChart;
use Zaimea\Charts\Livewire\LivewirePieChart;
use Zaimea\Charts\Livewire\LivewirePolarAreaChart;
use Zaimea\Charts\Livewire\LivewireRadarChart;
use Zaimea\Charts\Livewire\LivewireRadialChart;
use Zaimea\Charts\Tests\TestCase;

class ChartsTest extends TestCase
{
    public function test_it_tests_charts_can_render_pie_charts_by_default(): void
    {
        $chart = Charts::pieChart()->setTitle('Users Test Chart');
        $this->assertEquals('pie', $chart->type());

        $anotherChart = Charts::areaChart();
        $this->assertEquals('area', $anotherChart->type());
    }

    public function test_it_tests_charts_can_render_pie_chart(): void
    {
        $chart = Charts::pieChart()
            ->setLabels(['Product One', 'Product Two', 'Product Three'])
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setTitle('Posts')
            ->setSubtitle('From January To March');

        $this->assertEquals('pie', $chart->type());
        $this->assertNotNull(Livewire::test(LivewirePieChart::class));
    }

    public function test_it_tests_charts_can_render_donut_chart(): void
    {
        $chart = Charts::donutChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([150, 120])
            ->setTitle('Posts');

        $this->assertEquals('donut', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireDonutChart::class));
    }

    public function test_it_tests_charts_can_render_radial_bar_charts(): void
    {
        $chart = Charts::radialChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([60, 40, 79])
            ->setTitle('Products with more profit');

        $this->assertEquals('radialBar', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireRadialChart::class));
    }

    public function test_it_tests_charts_can_render_polar_chart(): void
    {
        $chart = Charts::polarAreaChart()
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([60, 40, 79])
            ->setTitle('Products with more profit');

        $this->assertEquals('polarArea', $chart->type());
        $this->assertNotNull(Livewire::test(LivewirePolarAreaChart::class));
    }

    public function test_charts_can_render_line_charts(): void
    {
        $chart = Charts::lineChart()
            ->setXAxis([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset([
                [
                    'name'  =>  'Active Users',
                    'data'  =>  [250, 700, 1200]
                ]
            ])
            ->setHeight(250)
            ->setGrid()
            ->setStroke(1)
            ->setTitle('Total Users Monthly')
            ->setSubtitle('From January to March');

        $this->assertEquals('line', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireLineChart::class));
    }

    public function test_it_tests_charts_can_create_an_area_chart(): void
    {
        $chart = Charts::areaChart()
            ->setXAxis([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset([
                [
                    'name'  =>  'Active Users',
                    'data'  =>  [250, 700, 1200]
                ],
                [
                    'name'  =>  'New Users',
                    'data'  =>  [1000, 1124, 2000]
                ]
            ])
            ->setTitle('Total Users Monthly')
            ->setSubtitle('From January to March');

        $this->assertEquals('area', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireAreaChart::class));
    }

    public function test_it_tests_charts_can_render_bar_charts(): void
    {
        $chart = Charts::barChart()
            ->setDataset([
                [
                    'name'  => 'Company A',
                    'data'  =>  [500, 1000, 1900]
                ],
                [
                    'name'  => 'Company B',
                    'data'  => [300, 900, 1400]
                ],
                [
                    'name'  => 'Company C',
                    'data'  => [430, 245, 500]
                ],
                [
                    'name'  => 'Company D',
                    'data'  => [200, 245, 700]
                ],
                [
                    'name'  => 'Company E',
                    'data'  => [120, 45, 610]
                ],
                [
                    'name'  => 'Company F',
                    'data'  => [420, 280, 400]
                ]
            ])
            ->setTitle('Net Profit')
            ->setXAxis(['Jan', 'Feb', 'Mar']);

        $this->assertEquals('bar', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireBarChart::class));
    }

    public function test_it_tests_charts_can_render_stacked_bar_chart(): void
    {
        $chart = Charts::barChart()
            ->setStacked(true)
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([
                [
                    'name' => 'Company A',
                    'data' => [500, 1000, 1900]
                ],
                [
                    'name' => 'Company B',
                    'data' => [300, 800, 1400]
                ],
                [
                    'name' => 'Company C',
                    'data' => [304, 231, 500]
                ]
            ])
            ->setTitle('Net Profit');

        $this->assertEquals('bar', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireBarChart::class));
        $this->assertTrue($chart->stacked());
    }

    public function test_it_tests_charts_can_render_horizontal_bar_chart(): void
    {
        $chart = Charts::barChart()
            ->setHorizontal(true)
            ->setXAxis(['Jan', 'Feb', 'Mar'])
            ->setDataset([
                [
                    'name'  => 'Company A',
                    'data'  =>  [500, 1000, 1900]
                ],
                [
                    'name'  => 'Company B',
                    'data'  => [300, 900, 1400]
                ],
                [
                    'name'  => 'Company C',
                    'data'  => [430, 245, 500]
                ]
            ])
            ->setTitle('Net Profit');

        $this->assertEquals('bar', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireHorizontalBar::class));
        $this->assertTrue((bool)$chart->horizontal());
    }

    public function test_it_tests_charts_can_render_heatmap_chart(): void
    {
        $chart = Charts::heatMapChart()
            ->setXAxis([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset([
                [
                    'name'  =>  'Users of Basic Plan',
                    'data'  =>  [250, 700, 1200]
                ],
                [
                    'name'  =>  'Users of Premium Plan',
                    'data'  =>  [1000, 1124, 2000]
                ]
            ])
            ->setTitle('Total Users');

        $this->assertEquals('heatmap', $chart->type());
        $this->assertNotNull(Livewire::test(LivewireHeatMapChart::class));
    }

    public function test_it_tests_charts_can_render_radar_chart(): void
    {
        $chart = Charts::radarChart()
            ->setXAxis([
                'Jan', 'Feb', 'Mar'
            ])
            ->setDataset([
                [
                    'name'  =>  'Users of Basic Plan',
                    'data'  =>  [250, 700, 1200]
                ],
                [
                    'name'  =>  'Users of Premium Plan',
                    'data'  =>  [1000, 1124, 2000]
                ]
            ])
            ->setTitle('Total Users');

            $this->assertEquals('radar', $chart->type());
            $this->assertNotNull(Livewire::test(LivewireRadarChart::class));
    }
}
