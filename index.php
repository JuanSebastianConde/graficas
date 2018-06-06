<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Prueba gráfica</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="Highcharts/code/highcharts.js"></script>
<script src="Highcharts/code/modules/exporting.js"></script>
<script src="Highcharts/code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Prueba de una gráfica'
    },
    subtitle: {
        text: 'Servidores'
    },
    xAxis: {
        allowDecimals: false,
        labels: {
            formatter: function () {
                return this.value; // clean, unformatted number for year
            }
        }
    },
    yAxis: {
        title: {
            text: 'Nucleos de cpu'
        },
        labels: {
            formatter: function () {
                return this.value / 1 + 'CPU';
            }
        }
    },
    tooltip: {
        pointFormat: '{series.name} had stockpiled <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
    },
    plotOptions: {
        area: {
            pointStart: 1,
            marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'BOGDB01',
        data: [ 10,20,30,40,50 ]
    }, {
        name: 'PERDB01',
        data: [ 20,60,80 ]
    }, {
        name: 'BAQDB01',
        data: [ 50,70,10,130 ]    
    }]
});
		</script>
	</body>
</html>
