<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models;

use ZaimeaLabs\Charts\Contracts\AddsComplexDatas;
use ZaimeaLabs\Charts\Models\Traits\Aggregator\Complex;

class HorizontalBarModel extends ChartsBase implements AddsComplexDatas
{
    use Complex;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'bar';
        $this->horizontal = true;
    }

    public function addBar(string $name, array $data): HorizontalBarModel
    {
        return $this->addData($name, $data);
    }
}
