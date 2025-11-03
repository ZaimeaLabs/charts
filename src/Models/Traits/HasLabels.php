<?php

declare(strict_types=1);

namespace Zaimea\Charts\Models\Traits;

trait HasLabels
{
    protected array $labels = [];

    public function setLabels(array $labels): static
    {
        $this->labels = $labels;

        return $this;
    }

    public function transformLabels(array $array): bool|string
    {
        $stringArray = array_filter($array, function($string){
            return "{$string}";
        });
        return json_encode(['"' . implode('","', $stringArray) . '"']);
    }

    public function labels(): array
    {
        return $this->labels;
    }
}
