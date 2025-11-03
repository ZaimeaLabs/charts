<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasWidth
{
    protected int|string $width = '100%';

    public function setWidth(int $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function width(): string
    {
        return $this->width;
    }
}
