<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\RadarChartModel;

/**
 * Class LivewireRadarChart
 * @package ZaimeaLabs\Charts\Livewire
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
