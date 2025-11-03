<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\RadialChartModel;

/**
 * Class LivewireRadialChart
 * @package Zaimea\Charts\Livewire
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
