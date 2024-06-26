<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models;

use ZaimeaLabs\Charts\Contracts\AddsSimpleDatas;
use ZaimeaLabs\Charts\Models\Traits\Aggregator\Simple;

class RadialChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'radialBar';
    }

    public function addRings(array $data): RadialChartModel
    {
        $this->addData($data);
        return $this;
    }
}
