<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasDataSet
{
    protected string $dataset = '';

    public function setDataset(array $dataset): static
    {
        $this->dataset = json_encode($dataset);

        return $this;
    }

    public function dataset(): string
    {
        return $this->dataset;
    }
}
