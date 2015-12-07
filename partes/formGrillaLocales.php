<?php
	require_once("clases/AccesoDatos.php");
	require_once("clases/local.php");

	session_start();

	$arrayDeLocales=local::TraerTodoLosLocales();

	if(isset($_SESSION['tipo']))
	{
?>
	<div align="right">
		<a href="php/exportarLocalPDF.php" class="btn btn-primary" style='background-color: red;'>Exportar a PDF</a>
		<a href="php/exportarLocalXLS.php" class="btn btn-primary" style='background-color: green;'>Exportar a Excel</a>
		<?php
		if($_SESSION['tipo'] == "admin")
		{ ?>
			<button onclick="Mostrar('AltaLocal')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Local</button>			
		<?php 
		}
	} ?>
	</div>
<br>
<div>
	<table class="table">
		<thead>
			<tr>
				<th>Descripción</th><th>Provincia</th><th>Localidad</th><th>Dirección</th><th>Teléfono</th><th>Foto</th>
				<?php 
					if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
						{echo "<th>Editar</th><th>Borrar</th>";}
					else
						{echo "<th>Mapa</th>";}
				?>
			</tr>
		</thead>
		<tbody>

			<?php 
				foreach ($arrayDeLocales as $local) {
					$m = '"'.$local->provincia.'", "'.$local->direccion.'", "'.$local->localidad.'", "'.$local->foto.'", "'.$local->descripcion.'"';
					echo"<tr>							
							<td>$local->descripcion</td>
							<td>$local->provincia</td>
							<td>$local->localidad</td>
							<td>$local->direccion</td>
							<td>$local->telefono</td>
							<td><img  class='fotoGrilla' src='fotos/".$local->foto."?".$_SERVER['REQUEST_TIME']."' /></td>";
					if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
						{
							echo "<td><a onclick='EditarLocal($local->id)' class='btn btn-warning' style='color:white;'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
							<td><a onclick='BorrarLocal($local->id)' class='btn btn-danger' style='color:white;'> <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>";
						}
					else
						{
							echo "<td><button onclick='VerEnMapa($m)' class='btn btn-warning' style='background-color: green; color:white;'>Ver en Mapa</button></td>";
						}						
					echo	"</tr>";
				}
			 ?>
		</tbody>
	</table>	
</div>

<div id="mapa">
</div>