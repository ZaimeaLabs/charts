<div
    style="width: 100%; height: 100%;"
    x-data="{ ...chartsLineChart() }"
    x-init="init()"
>
    <div wire:ignore x-ref="container"></div>
</div>
<script>
    const chartsLineChart = function () {
        return {
            chart: null,
            init: function () {
                const t = this;
                setTimeout(function () {
                    t.drawChart(t.$wire);
                }, 0);
            },
            drawChart: function (t) {
                this.chart && this.chart.destroy();

                const options = t.get('lineCharts.options')

                this.chart = new ApexCharts(this.$refs.container, options)
                this.chart.render();
            }
        };
    }
</script>
