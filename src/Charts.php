<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts;

use ZaimeaLabs\Charts\Models\AreaChartModel;
use ZaimeaLabs\Charts\Models\BarChartModel;
use ZaimeaLabs\Charts\Models\DonutChartModel;
use ZaimeaLabs\Charts\Models\HeatMapChartModel;
use ZaimeaLabs\Charts\Models\HorizontalBarModel;
use ZaimeaLabs\Charts\Models\LineChartModel;
use ZaimeaLabs\Charts\Models\PieChartModel;
use ZaimeaLabs\Charts\Models\PolarAreaChartModel;
use ZaimeaLabs\Charts\Models\RadarChartModel;
use ZaimeaLabs\Charts\Models\RadialChartModel;

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
