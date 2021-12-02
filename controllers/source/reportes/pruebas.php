<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registros de Vehiculos</title>

		<style type="text/css">
#container {
  height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

		</style>
	</head>
	<body>

<script src="../../graficos/code/highcharts.js"></script>
<script src="../../graficos/code/highcharts-3d.js"></script>
<script src="../../graficos/code/modules/exporting.js"></script>
<script src="../../graficos/code/modules/export-data.js"></script>
<script src="../../graficos/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        <!--Chart showing grouped and stacked 3D columns. These features are
        available both for 2D and 3D column charts.-->
     </p>
</figure>


		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            viewDistance: 25,
            depth: 40
        }
    },

    title: {
        text: 'Registro de Vehiculos Mensuales'
    },

    xAxis: {
        categories: [<?php

                      $rutas = $this->model->rutas->get();
                      foreach ($rutas as $row){

        ?>
['<?php echo $row->getNombre()?>'], <?php  }  ?>]
             
       


         

        ,
        /*'Cambures', 'Oranges', 'Pears', 'Grapes', 'Bananas'*/

     
        labels: {
            skew3d: true,
            style: {
                fontSize: '16px'
            }
        }
    },

    yAxis: {
        allowDecimals: false,
        min: 0,
        title: {
            text: 'Number of fruits',
            skew3d: true
        }
    },

    tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
    },

    plotOptions: {
        column: {
            stacking: 'normal',
            depth: 40
        }
    },

    series: [{
        name: 'joe',
        data: [<?php  

            $rutas = $this->model->rutas->get();

            foreach ($rutas as $row) {
              
          ?>

          [<?php echo $row->getId()?>],

          <?php } ?>
          ],
        stack: 'male'
        }, {
        name: 'Joe',
        data: [<?php  

            $rutas = $this->model->rutas->get();

            foreach ($rutas as $row) {
              
          ?>

          [<?php echo $row->getId()?>],

          <?php } ?>],
        stack: 'male'
    }]
});

		</script>
	</body>
</html>
