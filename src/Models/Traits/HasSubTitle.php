<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasSubTitle
{
    protected string $subtitle = '';
    protected string $subtitlePosition = 'left';

    public function setSubtitle(string $subtitle, string $position = 'left'): static
    {
        $this->subtitle = $subtitle;
        $this->subtitlePosition = $position;

        return $this;
    }

    public function subtitle(): string
    {
        return $this->subtitle;
    }

    public function subtitlePosition(): string
    {
        return $this->subtitlePosition;
    }
}
