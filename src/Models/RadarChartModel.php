<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models;

use Zaimea\Charts\Contracts\AddsComplexDatas;
use Zaimea\Charts\Models\Traits\Aggregator\Complex;

class RadarChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'radar';
    }

    public function addSerie(string $name, array $data): RadarChartModel
    {
        return $this->addData($name, $data);
    }
}
