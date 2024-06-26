<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\RadialChartModel;

/**
 * Class LivewireRadialChart
 * @package ZaimeaLabs\Charts\Livewire
 */
class LivewireRadialChart extends Component
{
    public $radialCharts;

    public function mount(RadialChartModel $radialCharts)
    {
        $this->radialCharts = $radialCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-radial-chart');
    }
}
