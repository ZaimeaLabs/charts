<div id="{!! $chart->key !!}"></div>
<script>
    const options =
    {
        chart: {
            type: '{!! $chart->type() !!}',
            height: {!! $chart->height() !!},
            width: '{!! $chart->width() !!}',
            toolbar: {!! $chart->toolbar() !!},
            zoom: {!! $chart->zoom() !!},
            fontFamily: '{!! $chart->fontFamily() !!}',
            foreColor: '{!! $chart->foreColor() !!}',
            sparkline: {!! $chart->sparkline() !!},
            @if($chart->stacked())
            stacked: {!! $chart->stacked() !!},
            @endif
            animations: {!! $chart->animations() !!},
        },
        plotOptions: {
            bar: {
                horizontal: {!! $chart->horizontal() !!},
                distributed: '{!! $chart->distributed() !!}',
            },
        },
        colors: {!! $chart->colors() !!},
        series: {!! $chart->dataset() !!},
        dataLabels: {!! $chart->dataLabels() !!},
        theme: {
            mode: "{!! $chart->theme() !!}",
        },
        tooltip: {!! $chart->tooltip() !!},
        @if($chart->labels())
            labels: {!! json_encode($chart->labels(), true) !!},
        @endif
        title: {
            text: "{!! $chart->title() !!}"
        },
        subtitle: {
            text: '{!! $chart->subtitle() !!}',
            align: '{!! $chart->subtitlePosition() !!}'
        },
        xaxis: {
            categories: {!! $chart->xAxis() !!}
        },
        grid: {!! $chart->grid() !!},
        markers: {!! $chart->markers() !!},
        @if($chart->stroke())
            stroke: {!! $chart->stroke() !!},
        @endif
    }
    const chart = new ApexCharts(document.getElementById("{!! $chart->key !!}"), options);
    chart.render();
</script>
