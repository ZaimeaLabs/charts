<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasHeight
{
    protected int $height = 500;

    public function setHeight(int $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function height(): int
    {
        return $this->height;
    }
}
