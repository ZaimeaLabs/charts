<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\LineChartModel;

/**
 * Class LivewireLineChart
 * @package Zaimea\Charts\Livewire
 */
class LivewireLineChart extends Component
{
    public $lineCharts;

    public function mount(LineChartModel $lineCharts)
    {
        $this->lineCharts = $lineCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-line-chart');
    }
}
