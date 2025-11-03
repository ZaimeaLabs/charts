<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\RadarChartModel;

/**
 * Class LivewireRadarChart
 * @package Zaimea\Charts\Livewire
 */
class LivewireRadarChart extends Component
{
    public $radarCharts;

    public function mount(RadarChartModel $radarCharts)
    {
        $this->radarCharts = $radarCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-radar-chart');
    }
}
