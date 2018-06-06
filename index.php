<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pruebas gráficas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
    <div id="grafica">
        <script>
            $(function($)
            {
                $('#grafica').highcharts({
                        title:{text:'Prueba de una gráfica'},
                        xAxis:{categories:['BOGDB01', 'PERDB01', 'BAQDB01']},
                        yAxis:{title:'%'}, plotlines:[{value:0,width:1, color:'red'}],
                        tooltip:{valueSuffix:'%'},
                        legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
                        series:[{name:'asd',data:[2,25,75]}]
                });

            })        
        </script>



    </div>
    
</body>
</html>