<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Contracts;

interface AddsComplexDatas
{
    public function addData(string $name, array $data): static;
}
