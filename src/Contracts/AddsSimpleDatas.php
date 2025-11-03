<?php

declare(strict_types=1);

namespace Zaimea\Charts\Contracts;

interface AddsSimpleDatas
{
    public function addData(array $data): static;
}
