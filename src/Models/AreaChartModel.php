<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models;

use ZaimeaLabs\Charts\Contracts\AddsComplexDatas;
use ZaimeaLabs\Charts\Models\Traits\Aggregator\Complex;

class AreaChartModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'area';
    }

    public function addArea(string $name, array $data): AreaChartModel
    {
        return $this->addData($name, $data);
    }
}
