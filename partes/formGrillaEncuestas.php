<?php
	require_once("clases/AccesoDatos.php");
	require_once("clases/encuesta.php");

	session_start();

	//var_dump($_SESSION['id']);
	$arrayDeEncuestas=encuesta::TraerTodasLasEncuestasDelUsuario($_SESSION['id']);
?>

	<?php
	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "user")
	{ ?>
		<div align="right">
			<button onclick="Mostrar('AltaEncuesta')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nueva Encuesta</button>
		</div>
	<?php } ?>
<br>
<div class="col-md-6 col-md-offset-3">
	<?php
		//var_dump($arrayDeEncuestas);
	?>
	<table class="table">
		<thead>
			<tr>
				<th>Fecha</th><th>Nombre del local</th><th>Ver respuestas</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($arrayDeEncuestas as $encuesta) {
					echo"<tr>							
							<td>$encuesta[3]</td>
							<td>$encuesta[13]</td>
							<td><button onclick='VerEncuesta($encuesta[0])' class='btn btn-warning' style='background-color: green; color:white;'>Ver Respuestas</button></td>";					
					echo	"</tr>";
				}
			 ?>
		</tbody>
	</table>
</div>