<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasStacked
{
    protected bool $stacked = false;

    public function setStacked(bool $stacked = true): static
    {
        $this->stacked = $stacked;

        return $this;
    }

    public function stacked(): bool
    {
        return $this->stacked;
    }
}
