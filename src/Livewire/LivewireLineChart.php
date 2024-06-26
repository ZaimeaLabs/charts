<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\LineChartModel;

/**
 * Class LivewireLineChart
 * @package ZaimeaLabs\Charts\Livewire
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
