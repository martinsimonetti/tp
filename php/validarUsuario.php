<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");
	require_once("../clases/validadora.php");

	$dni=$_POST['dni'];
	$clave=$_POST['clave'];
	$recordar=$_POST['recordarme'];

	echo validadora::ValidarLogin($dni,$clave,$recordar);
?>