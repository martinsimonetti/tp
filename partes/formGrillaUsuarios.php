<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/validadora.php");

if(validadora::ValidarSesionVigente())
{
	$arrayDeUsuarios=usuario::TraerTodoLosUsuarios();
?>

<div align="right">
	<button onclick="Mostrar('AltaUsuario')" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Nuevo Usuario</button>
</div>
<br>
<div>
	<table class="table">
		<thead>
			<tr>
				<th>Nombre</th><th>Apellido</th><th>DNI</th><th>Dirección</th><th>Teléfono</th><th>E-mail</th><th>Tipo</th><th>Editar</th><th>Borrar</th>
			</tr>
		</thead>
		<tbody>

			<?php 
				foreach ($arrayDeUsuarios as $usuario) {
					echo"<tr>							
							<td>$usuario->nombre</td>
							<td>$usuario->apellido</td>
							<td>$usuario->dni</td>
							<td>$usuario->direccion</td>
							<td>$usuario->telefono</td>
							<td>$usuario->mail</td>
							<td>$usuario->tipo</td>
							<td><a onclick='EditarUsuario($usuario->id)' class='btn btn-warning' style='color:white;'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
							<td><a onclick='BorrarUsuario($usuario->id)' class='btn btn-danger' style='color:white;'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
						</tr>   ";
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