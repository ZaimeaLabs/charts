<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasLegend
{
    protected string $legend;

    public function setLegend($show = true, $position = 'bottom'): static
    {
        $this->legend = json_encode([
            'show' => $show,
            'position' => $position,
        ]);

        return $this;
    }

    protected function initLegend(): void
    {
        $this->legend = $this->defaultLegend();
    }

    private function defaultLegend(): string
    {
        return json_encode([
            'show' => true,
            'position' => 'bottom',
        ]);
    }

    public function legend(): bool|string
    {
        return $this->legend;
    }
}
