<?php

declare(strict_types=1);

namespace Zaimea\Charts;

use Zaimea\Charts\Models\AreaChartModel;
use Zaimea\Charts\Models\BarChartModel;
use Zaimea\Charts\Models\DonutChartModel;
use Zaimea\Charts\Models\HeatMapChartModel;
use Zaimea\Charts\Models\HorizontalBarModel;
use Zaimea\Charts\Models\LineChartModel;
use Zaimea\Charts\Models\PieChartModel;
use Zaimea\Charts\Models\PolarAreaChartModel;
use Zaimea\Charts\Models\RadarChartModel;
use Zaimea\Charts\Models\RadialChartModel;

class Charts
{
    public function pieChart(): PieChartModel
    {
        return new PieChartModel;
    }

    public function donutChart(): DonutChartModel
    {
        return new DonutChartModel;
    }

    public function radialChart(): RadialChartModel
    {
        return new RadialChartModel();
    }

    public function polarAreaChart(): PolarAreaChartModel
    {
        return new PolarAreaChartModel;
    }

    public function lineChart(): LineChartModel
    {
        return new LineChartModel;
    }

    public function areaChart(): AreaChartModel
    {
        return new AreaChartModel;
    }

    public function barChart(): BarChartModel
    {
        return new BarChartModel;
    }

    public function horizontalBarChart(): HorizontalBarModel
    {
        return new HorizontalBarModel;
    }

    public function heatMapChart(): HeatMapChartModel
    {
        return new HeatMapChartModel;
    }

    public function radarChart(): RadarChartModel
    {
        return new RadarChartModel;
    }
}
