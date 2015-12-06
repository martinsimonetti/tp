<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
	require_once("clases/encuesta.php");

	//var_dump($_SESSION['id']);
	if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") {
		$arrayDeEncuestas=encuesta::TraerTodasLasEncuestas();
	}
	else {
		$arrayDeEncuestas=encuesta::TraerTodasLasEncuestasDelUsuario($_SESSION['id']);
	}
?>

	<?php
	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "user")
	{ ?>
		<div align="right">
			<a href="php/exportarEncuestaPDF.php" class="btn btn-primary">Exportar a PDF</a>
			<a href="php/exportarEncuestaDOC.php" class="btn btn-primary">Exportar a Word</a>
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
				<th>Fecha</th><th>Nombre del local</th><?php
					if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") {
						echo "<th>Responsable</th>";
					}
				?><th>Ver respuestas</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($arrayDeEncuestas as $encuesta) {
					echo"<tr>							
							<td>$encuesta[3]</td>
							<td>$encuesta[13]</td>";
					if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin") {
						echo "<td>$encuesta[15]".", "."$encuesta[14]</td>";
					}
					echo "<td><button onclick='VerEncuesta($encuesta[0])' class='btn btn-warning' style='background-color: green; color:white;'>Ver Respuestas</button></td>";					
					echo	"</tr>";
				}
			 ?>
		</tbody>
	</table>
</div>

<?php   }else {
    echo "<h4 class='widgettitle col-md-6 col-md-offset-4'>Su sesión ha expirado. Por favor vuelva a loguearse.</h4>
    <button class='btn btn-primary col-md-1 col-md-offset-6' onclick='MostrarLogin()'>Login</button>";
  }
?>