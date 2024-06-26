<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

trait HasTheme
{
    protected string $theme = '';

    public function setTheme(string $theme): static
    {
        $this->theme = $theme;

        return $this;
    }

    protected function initTheme(): void
    {
        $this->theme = $this->defaultTheme();
    }

    private function defaultTheme(): string
    {
        return 'light';
    }

    public function theme(): string
    {
        return $this->theme;
    }
}
