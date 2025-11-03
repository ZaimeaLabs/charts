<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\PieChartModel;

/**
 * Class LivewirePieChart
 * @package Zaimea\Charts\Livewire
 */
class LivewirePieChart extends Component
{
    public $pieCharts;

    public function mount(PieChartModel $pieCharts)
    {
        $this->pieCharts = $pieCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-pie-chart');
    }
}
