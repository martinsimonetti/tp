<?php
	require_once("clases/AccesoDatos.php");
	require_once("clases/local.php");

	session_start();

	$arrayDeLocales=local::TraerTodoLosLocales();
?>
<div align="right">
	<button onclick="Mostrar('AltaLocal')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Local</button>
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
					echo"<tr>							
							<td>$local->descripcion</td>
							<td>$local->provincia</td>
							<td>$local->localidad</td>
							<td>$local->direccion</td>
							<td>$local->telefono</td>
							<td><img  class='fotoGrilla' src='fotos/".$local->foto."' /></td>";
					if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "admin")
						{
							echo "<td><a onclick='EditarLocal($local->id)' class='btn btn-warning' style='color:white;'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
							<td><a onclick='BorrarLocal($local->id)' class='btn btn-danger' style='color:white;'> <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>";
						}
					else
						{
							echo "<td><button onclick='Mostrar('AltaLocal')' class='btn btn-warning' style='background-color: green; color:white;'>Ver en Mapa</button></td>";
						}						
					echo	"</tr>";
				}
			 ?>
		</tbody>
	</table>	
</div>