<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits\Aggregator;

trait Complex
{
    public function addData(string $name, array $data): static
    {
        $dataset = json_decode($this->dataset);

        $dataset[] = [
            'name' => $name,
            'data' => $data
        ];

        $this->dataset = json_encode($dataset);

        return $this;
    }
}
