<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models;

use ZaimeaLabs\Charts\Contracts\AddsSimpleDatas;
use ZaimeaLabs\Charts\Models\Traits\Aggregator\Simple;

class PolarAreaChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'polarArea';
    }

    public function addPolarAreas(array $data): PolarAreaChartModel
    {
        $this->addData($data);
        return $this;
    }
}
