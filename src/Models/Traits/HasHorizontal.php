<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasHorizontal
{
    protected bool $horizontal;

    public function setHorizontal(bool $horizontal): static
    {
        $this->horizontal = $horizontal;

        return $this;
    }

    protected function initHorizontal(): void
    {
        $this->horizontal = $this->defaultHorizontal();
    }

    private function defaultHorizontal(): bool
    {
        return false;
    }

    public function horizontal(): bool
    {
        return $this->horizontal;
    }
}
