<?php
	require_once ('../lib/dompdf/dompdf_config.inc.php');
	
	$codigoHTML = "
	<html>
		<head>
			<meta charset='utf-8'>
			<title></title>
		</head>
		<body>
			<h1 align='center'>Encuesta</h1>
			<pre>1) ¿Fuiste saludado por los vendedores al entrar al establecimiento?
				- Si
				- No
			</pre>
			<pre>2) ¿Los empleados usaban el uniforme correctamente?
				- Si
				- No
			</pre>
			<pre>3) ¿Qué tan limpio se encontraba el local?
				- Muy sucio
				- Sucio
				- Regular
				- Limpio
				- Muy limpio
			</pre>
			<pre>4) ¿Le fue fácil encontrar el producto buscado?
				- Si
				- No
			</pre>
			<pre>5) ¿Con qué velocidad lo atendieron?
				- Muy lento
				- Lento
				- Regular
				- Rápido
				- Muy rápido
			</pre>
			<pre>6) ¿Con qué productos adicionales cuenta la Farmacia?
				- Perfumería
				- Ortopedia
				- Kiosco
				- Otros
			</pre>
			<pre>7) ¿Le ofrecieron algunos de los siguientes elementos?
				- Ofertas
				- Promociones
				- Productos genéricos
				- Otros productos
				- Otros
			</pre>
			<pre>8) ¿Le cobraron correctamente, entregándole el ticket?
				- Si
				- No
			</pre>
			<pre>9) ¿Fuiste saludado al salir del establecimiento?
				- Si
				- No
			</pre>
		</body>
	</html>";

	$dompdf=new DOMPDF();
	$dompdf->load_html($codigoHTML);
	ini_set("memory_limit","128M");
	$dompdf->render();
	$dompdf->stream("Encuesta.pdf");

?>

