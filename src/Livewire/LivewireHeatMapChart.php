<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\HeatMapChartModel;

/**
 * Class LivewireHeatMapChart
 * @package Zaimea\Charts\Livewire
 */
class LivewireHeatMapChart extends Component
{
    public $heatMapCharts;

    public function mount(HeatMapChartModel $heatMapCharts)
    {
        $this->heatMapCharts = $heatMapCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-heatmap-chart');
    }
}
