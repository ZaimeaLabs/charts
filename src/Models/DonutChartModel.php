<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models;

use ZaimeaLabs\Charts\Contracts\AddsSimpleDatas;
use ZaimeaLabs\Charts\Models\Traits\Aggregator\Simple;

class DonutChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'donut';
    }

    public function addPieces(array $data): DonutChartModel
    {
        $this->addData($data);
        return $this;
    }
}
