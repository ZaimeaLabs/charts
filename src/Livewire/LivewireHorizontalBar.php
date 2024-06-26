<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Livewire;

use Livewire\Component;
use ZaimeaLabs\Charts\Models\HorizontalBarModel;

/**
 * Class LivewireHorizontalBar
 * @package ZaimeaLabs\Charts\Livewire
 */
class LivewireHorizontalBar extends Component
{
    public $horizontalBarCharts;

    public function mount(HorizontalBarModel $horizontalBarCharts)
    {
        $this->horizontalBarCharts = $horizontalBarCharts->toLivewire();
    }

    public function render()
    {
        return view('charts::livewire-horizontal-bar');
    }
}
