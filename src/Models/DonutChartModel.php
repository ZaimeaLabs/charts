<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models;

use Zaimea\Charts\Contracts\AddsSimpleDatas;
use Zaimea\Charts\Models\Traits\Aggregator\Simple;

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
