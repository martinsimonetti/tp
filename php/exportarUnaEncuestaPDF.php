<?php
	require_once ('../lib/dompdf/dompdf_config.inc.php');

	require_once("../clases/AccesoDatos.php");
	require_once("../clases/encuesta.php");

	$arrayDeEncuestas=encuesta::TraerEncuesta($_GET['id']);

	$codigoHTML = 
	"<html>
			<head>
				<meta charset='utf-8'>
				<title></title>
			</head>
			<body>
				<h1 align='center'>Encuesta</h1>
				<h3>Local: ".$arrayDeEncuestas[0][15]."</h3>
				<h3>Fecha: ".$arrayDeEncuestas[0][3]."</h3>
				<pre>1) ¿Fuiste saludado por los vendedores al entrar al establecimiento?<br>";
					if ($arrayDeEncuestas[0][4]=="true") {
$codigoHTML .= "				- Si";
					} else {
$codigoHTML .= "				- No";
					}
					$codigoHTML .="</pre>
				<pre>2) ¿Los empleados usaban el uniforme correctamente?<br>";
					if ($arrayDeEncuestas[0][5]=="true") {
$codigoHTML .= "				- Si";
					} else {
$codigoHTML .= "				- No";
					}
					$codigoHTML .="</pre>
				<pre>3) ¿Qué tan limpio se encontraba el local?<br>";
$codigoHTML .= "				- ".$arrayDeEncuestas[0][6];
					$codigoHTML .="</pre>
				<pre>4) ¿Le fue fácil encontrar el producto buscado?<br>";
					if ($arrayDeEncuestas[0][7]=="true") {
$codigoHTML .= "				- Si";
					} else {
$codigoHTML .= "				- No";
					}
					$codigoHTML .="</pre>
				<pre>5) ¿Con qué velocidad lo atendieron?<br>";
$codigoHTML .= "				- ".$arrayDeEncuestas[0][8];
					$p6 = explode("/", $arrayDeEncuestas[0][9]);
					$codigoHTML .="</pre>
				<pre>6) ¿Con qué productos adicionales cuenta la Farmacia?<br>";
					if ($p6[0]=="true") { $codigoHTML .= "				- Perfumería<br>"; }
					if ($p6[1]=="true") { $codigoHTML .= "				- Ortopedia<br>"; }
					if ($p6[2]=="true") { $codigoHTML .= "				- Kiosco<br>"; }
					if ($p6[3]=="true") { $codigoHTML .= "				- Otros: ".$p6[4]."<br>"; }
					$p7 = explode("/", $arrayDeEncuestas[0][10]);
					$codigoHTML .="</pre>
				<pre>7) ¿Le ofrecieron algunos de los siguientes elementos?<br>";
					if ($p7[0]=="true") { $codigoHTML .= "				- Ofertas<br>"; }
					if ($p7[1]=="true") { $codigoHTML .= "				- Promociones<br>"; }
					if ($p7[2]=="true") { $codigoHTML .= "				- Productos genéricos<br>"; }
					if ($p7[3]=="true") { $codigoHTML .= "				- Otros productos<br>"; }
					if ($p7[4]=="true") { $codigoHTML .= "				- Otros: ".$p7[5]."<br>"; }
					$codigoHTML .="</pre>
				<pre>8) ¿Le cobraron correctamente, entregándole el ticket?<br>";
					if ($arrayDeEncuestas[0][11]=="true") {
$codigoHTML .= "				- Si";
					} else {
$codigoHTML .= "				- No";
					}
					$codigoHTML .="</pre>
				<pre>9) ¿Fuiste saludado al salir del establecimiento?<br>";
					if ($arrayDeEncuestas[0][12]=="true") {
$codigoHTML .= "				- Si";
					} else {
$codigoHTML .= "				- No";
					}
					$codigoHTML .="</pre>
				<h3>Realizado por: ".$arrayDeEncuestas[0][14].", ".$arrayDeEncuestas[0][13]."</h3>";
			$codigoHTML .= "</body>
		</html>";

	$dompdf=new DOMPDF();
	$dompdf->load_html($codigoHTML);
	ini_set("memory_limit","128M");
	$dompdf->render();
	$dompdf->stream($arrayDeEncuestas[0][15]." ".$arrayDeEncuestas[0][3].".pdf");
?>