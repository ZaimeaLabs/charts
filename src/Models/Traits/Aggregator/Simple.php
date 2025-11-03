<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits\Aggregator;

trait Simple
{
    public function addData(array $data): static
    {
        $this->dataset = json_encode($data);
        return $this;
    }
}
