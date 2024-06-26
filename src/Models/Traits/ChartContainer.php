<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models\Traits;

use Illuminate\Support\Facades\View;

trait ChartContainer
{
    public function container(): mixed
    {
        return View::make('charts::chart.container', ['chart' => $this]);
    }
}
