<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\PolarAreaChartModel;

/**
 * Class LivewirePolarAreaChart
 * @package Zaimea\Charts\Livewire
 */
class LivewirePolarAreaChart extends Component
{
    public $polarAreaCharts;

    public function mount(PolarAreaChartModel $polarAreaCharts)
    {
        $this->polarAreaCharts = $polarAreaCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-polararea-chart');
    }
}
