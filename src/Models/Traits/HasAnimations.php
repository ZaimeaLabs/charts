<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasAnimations
{
    protected string $animations;

    public function setAnimations(bool $enabled = true): static
    {
        $this->animations = json_encode(['enabled' => $enabled]);

        return $this;
    }

    protected function initAnimations(): void
    {
        $this->animations = $this->defaultAnimations();
    }

    private function defaultAnimations(): string
    {
        return json_encode(['enabled' => false]);
    }

    public function animations(): bool|string
    {
        return $this->animations;
    }
}
