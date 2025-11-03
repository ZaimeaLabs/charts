<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasGrid
{
    protected string $grid;

    public function setGrid(string $color = '#e5e5e5', float $opacity = 0.02): static
    {
        $this->grid = json_encode([
            'show' => true,
            'row' => [
                'colors' => [$color, 'transparent'],
                'opacity' => $opacity,
            ],
        ]);

        return $this;
    }

    protected function initGrid(): void
    {
        $this->grid = $this->defaultGrid();
    }

    private function defaultGrid(): string
    {
        return json_encode([
            'show' => true,
            'row' => [
                'colors' => ['#e5e5e5', 'transparent'],
                'opacity' => 0.02,
            ],
        ]);
    }

    public function grid(): bool|string
    {
        return $this->grid;
    }
}
