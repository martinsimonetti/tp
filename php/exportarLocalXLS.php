<?php
	require_once ('../lib/dompdf/dompdf_config.inc.php');

	require_once("../clases/AccesoDatos.php");
	require_once("../clases/local.php");

	$arrayDeLocales=local::TraerTodoLosLocales();

	$codigoHTML = "
	<html>
		<head>
			<meta charset='utf-8'>
			<title></title>
		</head>
		<body>
			<h1 align='center'>Locales</h1>
			<div class='container'>
				<div class='row'>
					<div id='principal'>
						<div class='col-md-6 col-md-offset-3'>
							<div>
								<table width='100%' border='1' cellspacing='0' cellpadding='0'>
									<tr>
										<th bgcolor='green'>Descripción</th><th bgcolor='green'>Provincia</th><th bgcolor='green'>Localidad</th><th bgcolor='green'>Dirección</th><th bgcolor='green'>Teléfono</th>
									</tr>";			
										foreach ($arrayDeLocales as $local) {
											$codigoHTML .= "<tr>
													<td>$local->descripcion</td>
													<td>$local->provincia</td>
													<td>$local->localidad</td>
													<td>$local->direccion</td>
													<td>$local->telefono</td></tr>";
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

	echo $codigoHTML;

	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=Locales.xls");
?>