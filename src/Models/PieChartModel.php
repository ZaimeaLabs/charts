<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models;

use Zaimea\Charts\Contracts\AddsSimpleDatas;
use Zaimea\Charts\Models\Traits\Aggregator\Simple;

class PieChartModel extends ChartsBase implements AddsSimpleDatas
{
    use Simple;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'pie';
    }

    public function addPieces(array $data): PieChartModel
    {
        $this->addData($data);
        return $this;
    }

    public function addPiecesWithLabels(array $data, array $labels): PieChartModel
    {
        $this->addData($data);
        $this->setLabels($labels);
        return $this;
    }
}
