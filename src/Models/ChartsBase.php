<?php

declare(strict_types=1);

namespace ZaimeaLabs\Charts\Models;

use Illuminate\Support\Str;

/**
 * Class ChartsBase
 * @package ZaimeaLabs\Charts\Models
 */
class ChartsBase
{
    use Traits\HasAnimations;
    use Traits\HasType;
    use Traits\HasTitle;
    use Traits\HasTheme;
    use Traits\HasSubTitle;
    use Traits\HasLabels;
    use Traits\HasDataLabels;
    use Traits\HasFontFamily;
    use Traits\HasForeColor;
    use Traits\HasDataSet;
    use Traits\HasHeight;
    use Traits\HasWidth;
    use Traits\HasColors;
    use Traits\HasHorizontal;
    use Traits\HasDistributed;
    use Traits\HasXAxis;
    use Traits\HasGrid;
    use Traits\HasMarkers;
    use Traits\HasStacked;
    use Traits\HasStroke;
    use Traits\HasToolbar;
    use Traits\HasTooltip;
    use Traits\HasZoom;
    use Traits\HasSparkLine;
    use Traits\HasJsonConfig;
    use Traits\ChartContainer;
    use Traits\HasLegend;
    use Traits\HasYAxis;

    public string $key;

    public function __construct()
    {
        $this->key = $this->reactiveKey();
        $this->initAnimations();
        $this->initHorizontal();
        $this->initDistributed();
        $this->initColors();
        $this->initXAxis();
        $this->initYAxis();
        $this->initGrid();
        $this->initLegend();
        $this->initMarkers();
        $this->initToolbar();
        $this->initTooltip();
        $this->initTheme();
        $this->initZoom();
        $this->initDataLabels();
        $this->initSparkLine();
        $this->initFontFamily();
        $this->initForeColor();
        $this->initJsonConfig();
    }

    public function reactiveKey()
    {
        return md5(json_encode(Str::random(32)));
    }

    public function toLivewire(): array
    {
        $options = [
            'chart' => [
                'id' => $this->reactiveKey(),
                'type' => $this->type(),
                'height' => $this->height(),
                'toolbar' => json_decode($this->toolbar()),
                'zoom' => json_decode($this->zoom()),
                'fontFamily' => json_decode($this->fontFamily()),
                'foreColor' => $this->foreColor(),
                'sparkline' => json_decode($this->sparkline()),
                'stacked' => $this->stacked(),
                'animations' => json_decode($this->animations()),
            ],
            'plotOptions' => [
                'bar' => [
                    'horizontal' => $this->horizontal(),
                    'distributed' => json_decode($this->distributed()),
                ],
            ],
            'colors' => json_decode($this->colors()),
            'series' => json_decode($this->dataset()),
            'dataLabels' => json_decode($this->dataLabels()),
            'theme' => [
                'mode' => $this->theme(),
            ],
            'tooltip' => json_decode($this->tooltip()),
            'title' => [
                'text' => $this->title(),
            ],
            'subtitle' => [
                'text' => $this->subtitle() ? $this->subtitle() : '',
                'align' => $this->subtitlePosition() ? $this->subtitlePosition() : '',
            ],
            'xaxis' => [
                'categories' => json_decode($this->xAxis()),
            ],
            'yaxis' => [
                'labels' => [
                    'show' => json_decode($this->yAxis()),
                ]
              ],
            'grid' => json_decode($this->grid()),
            'markers' => json_decode($this->markers()),
            'legend' => json_decode($this->legend()),
        ];

        if($this->labels()) {
            $options['labels'] = $this->labels();
        }

        if($this->stroke()) {
            $options['stroke'] = json_decode($this->stroke());
        }

        return [
            'height' => $this->height(),
            'width' => $this->width(),
            'type' => $this->type(),
            'options' => $options,
            'series' => json_decode($this->dataset()),
            'key' => $this->reactiveKey(),
            'id' => $this->reactiveKey()
        ];
    }
}
