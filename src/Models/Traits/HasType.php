<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasType
{
    protected string $type = 'donut';

    /**
     *
     * @deprecated deprecated
     * @param string $type
     * @return $this
     */
    public function setType(string $type = null): static
    {
        $this->type = $type;

        return $this;
    }

    public function type(): string
    {
        return $this->type;
    }
}
