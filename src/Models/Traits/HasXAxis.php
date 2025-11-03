<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasXAxis
{
    protected string $xAxis;

    public function setXAxis(array $categories): static
    {
        $this->xAxis = json_encode($categories);

        return $this;
    }

    protected function initXAxis(): void
    {
        $this->xAxis = $this->defaultXAxis();
    }

    private function defaultXAxis(): string
    {
        return json_encode([]);
    }

    public function xAxis(): string
    {
        return $this->xAxis;
    }
}
