<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\BarChartModel;

/**
 * Class LivewireBarChart
 * @package ZaimeaLabs\Charts\Livewire
 */
class LivewireBarChart extends Component
{
    public $barCharts;

    public function mount(BarChartModel $barCharts)
    {
        $this->barCharts = $barCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-bar-chart');
    }
}
