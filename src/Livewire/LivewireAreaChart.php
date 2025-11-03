<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\AreaChartModel;

/**
 * Class LivewireAreaChart
 * @package Zaimea\Charts\Livewire
 */
class LivewireAreaChart extends Component
{
    public $areaCharts;

    public function mount(AreaChartModel $areaCharts)
    {
        $this->areaCharts = $areaCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-area-chart');
    }
}
