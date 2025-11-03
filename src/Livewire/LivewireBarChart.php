<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\BarChartModel;

/**
 * Class LivewireBarChart
 * @package Zaimea\Charts\Livewire
 */
class LivewireBarChart extends Component
{
    public $barCharts;

    public function mount(BarChartModel $barCharts)
    {
        $this->barCharts = $barCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-bar-chart');
    }
}
