<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasDistributed
{
    protected string $distributed;

    public function setDistributed(bool $distributed): static
    {
        $this->distributed = json_encode($distributed);

        return $this;
    }

    protected function initDistributed(): void
    {
        $this->distributed = json_encode($this->defaultDistributed());
    }

    private function defaultDistributed(): bool
    {
        return false;
    }

    public function distributed(): bool|string
    {
        return $this->distributed;
    }
}
