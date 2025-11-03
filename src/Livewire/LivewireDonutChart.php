<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\DonutChartModel;

/**
 * Class LivewireDonutChart
 * @package Zaimea\Charts\Livewire
 */
class LivewireDonutChart extends Component
{
    public $donutCharts;

    public function mount(DonutChartModel $donutCharts)
    {
        $this->donutCharts = $donutCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-donut-chart');
    }
}
