<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasHorizontal
{
    protected bool $horizontal;

    public function setHorizontal(bool $horizontal): static
    {
        $this->horizontal = json_encode($horizontal);

        return $this;
    }

    protected function initHorizontal(): void
    {
        $this->horizontal = json_encode($this->defaultHorizontal());
    }

    private function defaultHorizontal(): bool
    {
        return false;
    }

    public function horizontal(): bool|string
    {
        return $this->horizontal;
    }
}
