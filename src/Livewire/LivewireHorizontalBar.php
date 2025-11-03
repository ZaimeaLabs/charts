<?php

declare(strict_types=1);

namespace Zaimea\Charts\Livewire;

use Livewire\Component;
use Zaimea\Charts\Models\HorizontalBarModel;

/**
 * Class LivewireHorizontalBar
 * @package Zaimea\Charts\Livewire
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
