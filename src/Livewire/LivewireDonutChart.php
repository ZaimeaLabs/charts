<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\DonutChartModel;

/**
 * Class LivewireDonutChart
 * @package ZaimeaLabs\Charts\Livewire
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
