<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\PolarAreaChartModel;

/**
 * Class LivewirePolarAreaChart
 * @package ZaimeaLabs\Charts\Livewire
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
