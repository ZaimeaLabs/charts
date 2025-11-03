<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models;

use Zaimea\Charts\Contracts\AddsComplexDatas;
use Zaimea\Charts\Models\Traits\Aggregator\Complex;

class BarChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'bar';
    }

    public function addBar(string $name, array $data): BarChartModel
    {
        return $this->addData($name, $data);
    }
}
