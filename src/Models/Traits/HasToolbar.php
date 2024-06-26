<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasToolbar
{
    protected string $toolbar;

    public function setToolbar(bool $show = true, bool $zoom = true): static
    {
        $this->toolbar = json_encode(['show' => $show]);
        $this->zoom = json_encode(['enabled' => $zoom ? $zoom : false]);

        return $this;
    }

    protected function initToolbar(): void
    {
        $this->toolbar = $this->defaultToolbar();
    }

    private function defaultToolbar(): string
    {
        return json_encode(['show' => false]);
    }

    public function toolbar(): bool|string
    {
        return $this->toolbar;
    }
}
