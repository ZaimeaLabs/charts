<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\PieChartModel;

/**
 * Class LivewirePieChart
 * @package ZaimeaLabs\Charts\Livewire
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
