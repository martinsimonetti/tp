<?php
	
	require_once("clases/AccesoDatos.php");
	require_once("clases/encuesta.php");

	$arrayDeEncuestas=encuesta::ContarLocalesEncuestados();

?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable" hidden>
    <thead>
        <tr>
            <th></th>
            <th>Locales</th>
        </tr>
    </thead>
    <tbody>
        <?php 
			foreach ($arrayDeEncuestas as $encuesta) {
				echo"<tr>							
						<th>".$encuesta[0]."</th>
						<td>".$encuesta[1]."</td>
				</tr>";
			}
		?>
    </tbody>
</table>

<script>
$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de Locales Encuestados'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Cantidad'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
</script>

<div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<?php
	$arrayDeEncuestas2=encuesta::ContarLimpiezaLocales();
?>

<script type="text/javascript">
$(function () {

    $(document).ready(function () {

        // Build the chart
        $('#container2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Limpieza de los locales'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Porcentaje',
                colorByPoint: true,
                data: [{
                    name: <?php echo "'".$arrayDeEncuestas2[0][0]."'"; ?>,
                    y: <?php echo $arrayDeEncuestas2[0][1]; ?>,
                }, {
                    name: <?php echo "'".$arrayDeEncuestas2[1][0]."'"; ?>,
                    y: <?php echo $arrayDeEncuestas2[1][1]; ?>,
                    sliced: true,
                    selected: true
                }, {
                    name: <?php echo "'".$arrayDeEncuestas2[2][0]."'"; ?>,
                    y: <?php echo $arrayDeEncuestas2[2][1]; ?>,
                }, {
                    name: <?php echo "'".$arrayDeEncuestas2[3][0]."'"; ?>,
                    y: <?php echo $arrayDeEncuestas2[3][1]; ?>,
                }, {
                    name: <?php echo "'".$arrayDeEncuestas2[4][0]."'"; ?>,
                    y: <?php echo $arrayDeEncuestas2[4][1]; ?>,
                }]
            }]
        });
    });
});
</script>