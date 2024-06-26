<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasMarkers
{
    protected string $markers;

    public function setMarkers(array $colors = [], int $width = 4, int $hoverSize = 7): static
    {
        if(empty($colors)) {
            $colors = config('charts.colors');
        }

        $this->markers = json_encode([
            'size' => $width,
            'colors' => $colors,
            'strokeColors' => "#fff",
            'strokeWidth' => $width / 2,
            'hover' => [
                'size' => $hoverSize,
            ]
        ]);

        return $this;
    }

    protected function initMarkers(): void
    {
        $this->markers = $this->defaultMarkers();
    }

    private function defaultMarkers(): string
    {
        return json_encode(['show' => false]);
    }

    public function markers(): bool|string
    {
        return $this->markers;
    }
}
