<?php
	require_once ('../lib/dompdf/dompdf_config.inc.php');

	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$arrayDeUsuarios=usuario::TraerTodoLosUsuarios();

	$codigoHTML = "
	<html>
		<head>
			<meta charset='utf-8'>
			<title></title>
		</head>
		<body>
			<h1 align='center'>Usuarios</h1>
			<div class='container'>
				<div class='row'>
					<div id='principal'>
						<div class='col-md-6 col-md-offset-3'>
							<div>
								<table width='100%' border='1' cellspacing='0' cellpadding='0'>
									<tr>
										<th bgcolor='green'>Nombre</th>
										<th bgcolor='green'>Apellido</th>
										<th bgcolor='green'>DNI</th>
										<th bgcolor='green'>Dirección</th>
										<th bgcolor='green'>Teléfono</th>
										<th bgcolor='green'>E-mail</th>
										<th bgcolor='green'>Tipo</th>
									</tr>";			
										foreach ($arrayDeUsuarios as $usuario) {
											$codigoHTML .= "<tr>							
												<td>$usuario->nombre</td>
												<td>$usuario->apellido</td>
												<td>$usuario->dni</td>
												<td>$usuario->direccion</td>
												<td>$usuario->telefono</td>
												<td>$usuario->mail</td>
												<td>$usuario->tipo</td></tr>";
											}
								$codigoHTML .=	"
								</table>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>";

	$dompdf=new DOMPDF();
	$dompdf->load_html($codigoHTML);
	ini_set("memory_limit","128M");
	$dompdf->render();
	$dompdf->stream("Usuarios.pdf");

?>