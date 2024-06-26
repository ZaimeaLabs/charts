<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\HeatMapChartModel;

/**
 * Class LivewireHeatMapChart
 * @package ZaimeaLabs\Charts\Livewire
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
