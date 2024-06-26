<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasTitle
{
    protected string $title = '';

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function title(): string
    {
        return $this->title;
    }
}
