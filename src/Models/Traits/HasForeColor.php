<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasForeColor
{
    protected string $foreColor;

    public function setFontColor(string $fontColor): static
    {
        $this->foreColor = $fontColor;

        return $this;
    }

    protected function initForeColor(): void
    {
        $this->foreColor = $this->defaultForeColor();
    }

    private function defaultForeColor(): string
    {
        return json_encode(config('charts.font_color'));
    }

    public function foreColor(): string
    {
        return $this->foreColor;
    }
}
