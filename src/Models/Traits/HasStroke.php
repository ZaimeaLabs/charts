<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasStroke
{
    protected string $stroke = '';

    public function setStroke(int $width, array $colors = [], string $curve = 'straight'): static
    {
        if(empty($colors)) {
            $colors = config('charts.colors');
        }

        $this->stroke = json_encode([
            'show'    =>  true,
            'width'   =>  $width,
            'colors'  =>  $colors,
            'curve'   =>  $curve,
        ]);

        return $this;
    }

    public function stroke(): string
    {
        return $this->stroke;
    }
}
